<?php

return [
    'zf-hal' => [
        // map each class (by name) to their metadata mappings
        'metadata_map' => [
            'Application\Entity\UserAvatarEntity' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api-rest/user/avatar',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'UserApiHydrator',
            ],
        ],
    ]
];