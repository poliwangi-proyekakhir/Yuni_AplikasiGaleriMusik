import { spawn, ChildProcess } from 'child_process';
import { EventEmitter } from 'tsee';
import fs from 'fs';
import Path from 'path';
import os from 'os';
import { spawnHelper } from './spawn-helper';
import { ICamera, ICameraStartOptions } from './icamera';

export class Imagesnap extends EventEmitter<{
    snapshot: (buffer: Buffer, filename: string) => void,
    error: (message: string) => void
}> implements ICamera {
    private _captureProcess?: ChildProcess;
    private _tempDir?: string;
    private _watcher?: fs.FSWatcher;
    private _lastOptions?: ICameraStartOptions;

    /**
     * Instantiate the imagesnap backend (on macOS)
     */
    constructor() {
        super();
    }

    /**
     * Verify that all dependencies are installed
     */
    async init() {
        try {
            await spawnHelper('which', [ 'imagesnap' ]);
        }
        catch (ex) {
            throw new Error('Missing "imagesnap" in PATH. Install via `brew install imagesnap`');
        }
    }

    /**
     * List all available cameras
     */
    async listDevices() {
        let devices = await spawnHelper('imagesnap', [ '-l' ]);
        let names = devices.split('\n').filter(l => l.startsWith('<') || l.startsWith('=>')).map(l => {
            // Big Sur
            if (l.startsWith('=>')) {
                return l.substr(3).trim();
            }

            // Catalina
            let name = l.split('[')[1];
            return name.substr(0, name.length - 1);
        });

        return names;
    }

    /**
     * Start the capture process
     * @param options Specify the camera, and the required interval between snapshots
     */
    async start(options: ICameraStartOptions) {
        if (this._captureProcess) {
            throw new Error('Capture was already started');
        }

        this._lastOptions = options;

        this._tempDir = await fs.promises.mkdtemp(Path.join(os.tmpdir(), 'edge-impulse-cli'));
        const devices = await this.listDevices();
        if (!devices.find(d => d === options.device)) {
            throw new Error('Invalid device ' + options.device);
        }

        this._captureProcess = spawn('imagesnap', [
            '-d', options.device,
            '-t', (options.intervalMs / 1000).toString()
        ], { env: process.env, cwd: this._tempDir });

        this._watcher = fs.watch(this._tempDir, async (eventType, fileName) => {
            if (eventType === 'rename' && fileName.endsWith('.jpg') && this._tempDir) {
                try {
                    let data = await fs.promises.readFile(Path.join(this._tempDir, fileName));
                    this.emit('snapshot', data, Path.basename(fileName));
                }
                catch (ex) {
                    console.error('Failed to load file', Path.join(this._tempDir, fileName));
                }
            }
        });

        return new Promise<void>((resolve, reject) => {
            if (this._captureProcess) {
                this._captureProcess.on('close', code => {
                    if (typeof code === 'number') {
                        reject('Capture process failed with code ' + code);
                    }
                    else {
                        reject('Failed to start capture process, but no exit code. ' +
                            'This might be a permissions issue. ' +
                            'Are you running this command from a simulated shell (like in Visual Studio Code)?');
                    }
                    this._captureProcess = undefined;
                });
            }

            // tslint:disable-next-line: no-floating-promises
            (async () => {
                if (!this._tempDir) {
                    throw new Error('tempDir is undefined');
                }

                const watcher = fs.watch(this._tempDir, () => {
                    resolve();
                    watcher.close();
                });

                setTimeout(() => {
                    return reject('First photo was not created within 10 seconds');
                }, 10000);
            })();
        });
    }

    async stop() {
        return new Promise<void>((resolve) => {
            if (this._captureProcess) {
                this._captureProcess.on('close', code => {
                    if (this._watcher) {
                        this._watcher.close();
                    }
                    resolve();
                });
                this._captureProcess.kill('SIGINT');
                setTimeout(() => {
                    if (this._captureProcess) {
                        this._captureProcess.kill('SIGHUP');
                    }
                }, 500);
            }
            else {
                resolve();
            }
        });
    }

    getLastOptions() {
        return this._lastOptions;
    }
}
