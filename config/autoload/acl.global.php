<?php
return [
    'aclman_storage' => [
        'Strapieno\Auth\AclMan\Storage' => [
            'roles' => [
                // Permission for all roles
                \AclMan\Storage\StorageInterface::ALL_ROLES => [
                    'resources' => [
                        \AclMan\Storage\StorageInterface::ALL_RESOURCES => [
                            [
                                'allow' => false
                            ]
                        ]
                    ]
                ],
                'test' => [
                    'resources' => [
                        'Strapieno\User\Api\V1\Rest\Controller::entity' => [
                            [
                                'allow' => true
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];