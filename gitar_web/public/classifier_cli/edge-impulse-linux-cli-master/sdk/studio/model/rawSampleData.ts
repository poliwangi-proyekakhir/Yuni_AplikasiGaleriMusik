/**
 * Edge Impulse API
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

import { RawSamplePayload } from './rawSamplePayload';
import { Sample } from './sample';

export class RawSampleData {
    'sample': Sample;
    'payload': RawSamplePayload;
    /**
    * Total number of payload values
    */
    'totalPayloadLength': number;

    static discriminator: string | undefined = undefined;

    static attributeTypeMap: Array<{name: string, baseName: string, type: string}> = [
        {
            "name": "sample",
            "baseName": "sample",
            "type": "Sample"
        },
        {
            "name": "payload",
            "baseName": "payload",
            "type": "RawSamplePayload"
        },
        {
            "name": "totalPayloadLength",
            "baseName": "totalPayloadLength",
            "type": "number"
        }    ];

    static getAttributeTypeMap() {
        return RawSampleData.attributeTypeMap;
    }
}
