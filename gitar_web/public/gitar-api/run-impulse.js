// Load the inferencing WebAssembly module
const Module = require('./edge-impulse-standalone');
const fs = require('fs');

var express = require('express');
//store the express in a variable 
var app = express();

// Classifier module
let classifierInitialized = false;
Module.onRuntimeInitialized = function () {
    classifierInitialized = true;
};

function getTopN(arr, prop, n) {
    // clone before sorting, to preserve the original array
    var clone = arr.slice(0);

    // sort descending
    clone.sort(function (x, y) {
        if (x[prop] == y[prop]) return 0;
        else if (parseInt(x[prop]) < parseInt(y[prop])) return 1;
        else return -1;
    });

    return clone.slice(0, n || 1);
}

class EdgeImpulseClassifier {
    _initialized = false;

    init() {
        if (classifierInitialized === true) return Promise.resolve();

        return new Promise((resolve) => {
            Module.onRuntimeInitialized = () => {
                resolve();
                classifierInitialized = true;
            };
        });
    }

    classify(rawData, debug = false) {
        if (!classifierInitialized) throw new Error('Module is not initialized');

        const obj = this._arrayToHeap(rawData);
        let ret = Module.run_classifier(obj.buffer.byteOffset, rawData.length, debug);
        Module._free(obj.ptr);

        if (ret.result !== 0) {
            throw new Error('Classification failed (err code: ' + ret.result + ')');
        }


        let jsResult = {
            anomaly: ret.anomaly,
            results: []
        };

        for (let cx = 0; cx < ret.size(); cx++) {
            let c = ret.get(cx);
            jsResult.results.push({
                label: c.label,
                value: c.value,
                x: c.x,
                y: c.y,
                width: c.width,
                height: c.height
            });
            c.delete();
        }

        ret.delete();

        return jsResult;
    }

    getProperties() {
        return Module.get_properties();
    }

    _arrayToHeap(data) {
        let typedArray = new Float32Array(data);
        let numBytes = typedArray.length * typedArray.BYTES_PER_ELEMENT;
        let ptr = Module._malloc(numBytes);
        let heapBytes = new Uint8Array(Module.HEAPU8.buffer, ptr, numBytes);
        heapBytes.set(new Uint8Array(typedArray.buffer));
        return {
            ptr: ptr,
            buffer: heapBytes
        };
    }
}

// if (!process.argv[2]) {
//     return console.error('Requires one parameter (a comma-separated list of raw features, or a file pointing at raw features)');
// }

// let features = process.argv[2];
let features = "features.txt";
if (fs.existsSync(features)) {
    features = fs.readFileSync(features, 'utf-8');
}

// Initialize the classifier, and invoke with the argument passed in
let classifier = new EdgeImpulseClassifier();
classifier.init().then(async () => {
    let result = classifier.classify(features.trim().split(',').map(n => Number(n)));

    app.get('/api', function (req, res) {
        // console.log(result);
        res.setHeader('Content-Type', 'application/json');

        // res.write(JSON.stringify(result));

        var topScorers = getTopN(result['results'], "value", 1);
        topScorers.forEach(function (item, index) {
            // console.log("#" + (index + 1) + ": " + item.label + " - " + item.value);
            // hasil tertinggi
            var rsl = [item.label, item.value ];
            res.write(JSON.stringify(rsl));
        });
        // console.log(result['results']);
        res.end();
    });
    // console.log(result);
    var server = app.listen(3030, function () {
        var host = "127.0.0.1";
        var port = server.address().port;
        // console.log("Example app listening at http://%s:%s", host, port);
        console.log("Example app listening at http://%s:%s/", host, port);

    });

}).catch(err => {
    console.error('Failed to initialize classifier', err);
});