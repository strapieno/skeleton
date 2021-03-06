<?php
return [
    'RolesTypes' => [
        'guest',
        'god'
    ],
    'matryoshka-objects' => [
        'User' => [
            'type' => 'Application\Entity\UserEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria',
            'hydrator' => 'UserApiHydrator'
        ],
    ],
    'zf-hal' => [
        // map each class (by name) to their metadata mappings
        'metadata_map' => [
            'Application\Entity\UserEntity' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api-rest/user',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'UserApiHydrator',
            ],
        ],
    ],
];