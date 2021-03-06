<?php

return [
    'application' => [
        'base_url'  => '/'
    ],
    'session_config' => [
        'name'                  => 'PHPSID',
        'use_cookies'           => true,
        'cookie_domain'         => 'yourdomain.com',
        'cookie_httponly'       => true,
        'cookie_lifetime'       => 2592000, //30 days
        'remember_me_seconds'   => 2592000, //30 days
        'gc_maxlifetime'        => 2592000, //30 days
    ],
    'session_manager' => [
        'enable_default_container_manager' => true,
    ],
    'session_save_handler_mongo' => [
        'hosts' => 'mongo:27017',
        'database'   => 'strapieno-sessions',
        'collection' => 'sessions',
    ],
    'zf-oauth2' => [
        'mongo' => [
            'dsn' => 'mongo:27017',
        ],
        // https://apigility.org/documentation/auth/authentication-oauth2
        'options' => [
            'always_issue_new_refresh_token' => true, // zf2 default is false
            // 'refresh_token_lifetime' => (default is 1209600, equal to 14 days)
        ],
    ],
    'mongodb' => [
        'Mongo\Db' => [
            'database' => 'strapieno',
        ],
    ],
];
