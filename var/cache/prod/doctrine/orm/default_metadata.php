<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__User__CLASSMETADATA__' => 0,
'App__Entity__Room__CLASSMETADATA__' => 1,
'App__Entity__ResetPasswordRequest__CLASSMETADATA__' => 2,
'Vich__UploaderBundle__Entity__File__CLASSMETADATA__' => 3,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'filename' => [
                            'fieldName' => 'filename',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'filename',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'fullName' => [
                            'fieldName' => 'fullName',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'full_name',
                        ],
                        'isVerified' => [
                            'fieldName' => 'isVerified',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'is_verified',
                        ],
                        'createdAt' => [
                            'fieldName' => 'createdAt',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'created_at',
                        ],
                        'updatedAt' => [
                            'fieldName' => 'updatedAt',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'updated_at',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'filename' => 'filename',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'full_name' => 'fullName',
                        'is_verified' => 'isVerified',
                        'created_at' => 'createdAt',
                        'updated_at' => 'updatedAt',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'filename' => 'filename',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'fullName' => 'full_name',
                        'isVerified' => 'is_verified',
                        'createdAt' => 'created_at',
                        'updatedAt' => 'updated_at',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                    ],
                ],
                'associationMappings' => [
                    [
                        'rooms' => [
                            'fieldName' => 'rooms',
                            'joinTable' => [],
                            'targetEntity' => 'App\\Entity\\Room',
                            'mappedBy' => 'users',
                            'inversedBy' => null,
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\User',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Room',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Room',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'description' => [
                            'fieldName' => 'description',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 500,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'description',
                        ],
                        'createdAt' => [
                            'fieldName' => 'createdAt',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'created_at',
                        ],
                        'programedFor' => [
                            'fieldName' => 'programedFor',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'programed_for',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'description' => 'description',
                        'created_at' => 'createdAt',
                        'programed_for' => 'programedFor',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'description' => 'description',
                        'createdAt' => 'created_at',
                        'programedFor' => 'programed_for',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'room',
                    ],
                ],
                'associationMappings' => [
                    [
                        'users' => [
                            'fieldName' => 'users',
                            'joinTable' => [
                                'name' => 'room_user',
                                'joinColumns' => [
                                    [
                                        'name' => 'room_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                                'inverseJoinColumns' => [
                                    [
                                        'name' => 'user_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                            ],
                            'targetEntity' => 'App\\Entity\\User',
                            'mappedBy' => null,
                            'inversedBy' => 'rooms',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Room',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'joinTableColumns' => [
                                'room_id',
                                'user_id',
                            ],
                            'isOnDeleteCascade' => true,
                            'relationToSourceKeyColumns' => [
                                'room_id' => 'id',
                            ],
                            'relationToTargetKeyColumns' => [
                                'user_id' => 'id',
                            ],
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\ResetPasswordRequest',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\ResetPasswordRequest',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ResetPasswordRequestRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'selector' => [
                            'fieldName' => 'selector',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 20,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'selector',
                        ],
                        'hashedToken' => [
                            'fieldName' => 'hashedToken',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 100,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'hashed_token',
                        ],
                        'requestedAt' => [
                            'fieldName' => 'requestedAt',
                            'type' => 'datetime_immutable',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'requested_at',
                        ],
                        'expiresAt' => [
                            'fieldName' => 'expiresAt',
                            'type' => 'datetime_immutable',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'expires_at',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'selector' => 'selector',
                        'hashed_token' => 'hashedToken',
                        'requested_at' => 'requestedAt',
                        'expires_at' => 'expiresAt',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'selector' => 'selector',
                        'hashedToken' => 'hashed_token',
                        'requestedAt' => 'requested_at',
                        'expiresAt' => 'expires_at',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'reset_password_request',
                    ],
                ],
                'associationMappings' => [
                    [
                        'user' => [
                            'fieldName' => 'user',
                            'joinColumns' => [
                                [
                                    'name' => 'user_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => null,
                            'targetEntity' => 'App\\Entity\\User',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\ResetPasswordRequest',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'user_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'user_id' => 'user_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'user_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\AssignedGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\AssignedGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Vich\\UploaderBundle\\Entity\\File',
                ],
                'namespace' => [
                    'Vich\\UploaderBundle\\Entity',
                ],
                'rootEntityName' => [
                    'Vich\\UploaderBundle\\Entity\\File',
                ],
                'isEmbeddedClass' => [
                    true,
                ],
                'fieldMappings' => [
                    [
                        'name' => [
                            'fieldName' => 'name',
                            'nullable' => true,
                            'type' => 'string',
                            'columnName' => 'name',
                        ],
                        'originalName' => [
                            'fieldName' => 'originalName',
                            'columnName' => 'original_name',
                            'nullable' => true,
                            'type' => 'string',
                        ],
                        'mimeType' => [
                            'fieldName' => 'mimeType',
                            'columnName' => 'mime_type',
                            'nullable' => true,
                            'type' => 'string',
                        ],
                        'size' => [
                            'fieldName' => 'size',
                            'type' => 'integer',
                            'nullable' => true,
                            'columnName' => 'size',
                        ],
                        'dimensions' => [
                            'fieldName' => 'dimensions',
                            'type' => 'simple_array',
                            'nullable' => true,
                            'columnName' => 'dimensions',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'name' => 'name',
                        'original_name' => 'originalName',
                        'mime_type' => 'mimeType',
                        'size' => 'size',
                        'dimensions' => 'dimensions',
                    ],
                ],
                'columnNames' => [
                    [
                        'name' => 'name',
                        'originalName' => 'original_name',
                        'mimeType' => 'mime_type',
                        'size' => 'size',
                        'dimensions' => 'dimensions',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'file',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];