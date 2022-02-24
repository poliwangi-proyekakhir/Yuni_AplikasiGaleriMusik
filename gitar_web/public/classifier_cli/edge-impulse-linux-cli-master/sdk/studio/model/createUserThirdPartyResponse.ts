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

import { CreateUserThirdPartyResponseAllOf } from './createUserThirdPartyResponseAllOf';
import { GenericApiResponse } from './genericApiResponse';

export class CreateUserThirdPartyResponse {
    /**
    * Whether the operation succeeded
    */
    'success': boolean;
    /**
    * Optional error description (set if \'success\' was false)
    */
    'error'?: string;
    'status': CreateUserThirdPartyResponseStatusEnum;
    'jwtToken'?: string;

    static discriminator: string | undefined = undefined;

    static attributeTypeMap: Array<{name: string, baseName: string, type: string}> = [
        {
            "name": "success",
            "baseName": "success",
            "type": "boolean"
        },
        {
            "name": "error",
            "baseName": "error",
            "type": "string"
        },
        {
            "name": "status",
            "baseName": "status",
            "type": "CreateUserThirdPartyResponseStatusEnum"
        },
        {
            "name": "jwtToken",
            "baseName": "jwtToken",
            "type": "string"
        }    ];

    static getAttributeTypeMap() {
        return CreateUserThirdPartyResponse.attributeTypeMap;
    }
}


export type CreateUserThirdPartyResponseStatusEnum = 'userWasCreated' | 'userNotManagedByThirdParty' | 'userAlreadyExists';
export const CreateUserThirdPartyResponseStatusEnumValues: string[] = ['userWasCreated', 'userNotManagedByThirdParty', 'userAlreadyExists'];