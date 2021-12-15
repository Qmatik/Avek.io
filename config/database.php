<?php

return [
    'fetch' => PDO::FETCH_CLASS,
    'default' => 'core',
    'migrations' => 'migrations',
    'connections' => [
        'core' => [
            'driver' => env('DB_CORE_CONNECTION'),
            'host' => env('DB_CORE_HOST'),
            'database' => env('DB_CORE_DATABASE'),
            'username' => env('DB_CORE_USERNAME'),
            'password' => env('DB_CORE_PASSWORD'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'user_host' => false,
        ],
    ],
];
