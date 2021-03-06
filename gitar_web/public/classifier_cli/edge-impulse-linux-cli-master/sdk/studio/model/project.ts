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

import { User } from './user';

export class Project {
    'id': number;
    'name': string;
    'description': string;
    'created': Date;
    /**
    * User or organization that owns the project
    */
    'owner': string;
    'lastAccessed'?: Date;
    /**
    * Custom logo for this project (not available for all projects)
    */
    'logo'?: string;
    'ownerUserId'?: number;
    'ownerOrganizationId'?: number;
    'collaborators': Array<User>;
    'labelingMethod': ProjectLabelingMethodEnum;
    /**
    * Metadata about the project
    */
    'metadata': object;

    static discriminator: string | undefined = undefined;

    static attributeTypeMap: Array<{name: string, baseName: string, type: string}> = [
        {
            "name": "id",
            "baseName": "id",
            "type": "number"
        },
        {
            "name": "name",
            "baseName": "name",
            "type": "string"
        },
        {
            "name": "description",
            "baseName": "description",
            "type": "string"
        },
        {
            "name": "created",
            "baseName": "created",
            "type": "Date"
        },
        {
            "name": "owner",
            "baseName": "owner",
            "type": "string"
        },
        {
            "name": "lastAccessed",
            "baseName": "lastAccessed",
            "type": "Date"
        },
        {
            "name": "logo",
            "baseName": "logo",
            "type": "string"
        },
        {
            "name": "ownerUserId",
            "baseName": "ownerUserId",
            "type": "number"
        },
        {
            "name": "ownerOrganizationId",
            "baseName": "ownerOrganizationId",
            "type": "number"
        },
        {
            "name": "collaborators",
            "baseName": "collaborators",
            "type": "Array<User>"
        },
        {
            "name": "labelingMethod",
            "baseName": "labelingMethod",
            "type": "ProjectLabelingMethodEnum"
        },
        {
            "name": "metadata",
            "baseName": "metadata",
            "type": "object"
        }    ];

    static getAttributeTypeMap() {
        return Project.attributeTypeMap;
    }
}


export type ProjectLabelingMethodEnum = 'single_label' | 'object_detection';
export const ProjectLabelingMethodEnumValues: string[] = ['single_label', 'object_detection'];
