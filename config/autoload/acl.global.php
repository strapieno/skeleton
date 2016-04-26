<?php
//sudo lsof -i -n -P


return [
    'aclman_storage' => [
        'Strapieno\Auth\AclMan\Storage' => [
            'roles' => [
                // Permission for all roles
                \AclMan\Storage\StorageInterface::ALL_ROLES =>   [
                    'resources' => [
                        \AclMan\Storage\StorageInterface::ALL_RESOURCES => [
                            [
                                'allow' => true
                            ]
                        ],
                        'ZF\OAuth2\Controller\Auth::token' => [
                            [
                                'allow' => true
                            ]
                        ],
                        'Strapieno\UserAvatar\Api\V1\Rest\Controller::entity' => [
                            [
                                'allow' => true
                            ]
                        ],
                    ]
                ],
                'god' => [
                    'resources' => [
                        \AclMan\Storage\StorageInterface::ALL_RESOURCES => [
                            [
                                'allow' => true
                            ]
                        ],
                    ]
                ]
            ]
        ]
    ]
];