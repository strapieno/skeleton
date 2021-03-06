<?php
return [
    'service_manager' => [
        'abstract_factories' => [
        ],
        'factories' => [
        ],
        'invokables' => [
        ]
    ],
    'input_filters' => [
        'abstract_factories' => [
            'Strapieno\Utils\InputFilter\InputFilterAbstractServiceFactory',
        ],
        'invokables' => [
            'Zend\InputFilter\InputFilter' => 'Zend\InputFilter\InputFilter',
            'Zend\InputFilter\Input' => 'Zend\InputFilter\Input'
        ]
    ],
    'view_manager'          => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map'             => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack'      => [
            __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ]
];
