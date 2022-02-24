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


export class UpdateOrganizationBucketRequest {
    /**
    * S3 bucket description
    */
    'name'?: string;
    /**
    * S3 access key
    */
    'accessKey'?: string;
    /**
    * S3 secret key
    */
    'secretKey'?: string;
    /**
    * S3 endpoint
    */
    'endpoint'?: string;
    /**
    * S3 bucket
    */
    'bucket'?: string;
    /**
    * Prefix within the bucket
    */
    'prefix'?: string;
    /**
    * S3 region
    */
    'region'?: string;

    static discriminator: string | undefined = undefined;

    static attributeTypeMap: Array<{name: string, baseName: string, type: string}> = [
        {
            "name": "name",
            "baseName": "name",
            "type": "string"
        },
        {
            "name": "accessKey",
            "baseName": "accessKey",
            "type": "string"
        },
        {
            "name": "secretKey",
            "baseName": "secretKey",
            "type": "string"
        },
        {
            "name": "endpoint",
            "baseName": "endpoint",
            "type": "string"
        },
        {
            "name": "bucket",
            "baseName": "bucket",
            "type": "string"
        },
        {
            "name": "prefix",
            "baseName": "prefix",
            "type": "string"
        },
        {
            "name": "region",
            "baseName": "region",
            "type": "string"
        }    ];

    static getAttributeTypeMap() {
        return UpdateOrganizationBucketRequest.attributeTypeMap;
    }
}

