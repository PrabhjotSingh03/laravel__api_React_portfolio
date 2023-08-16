<?php

return [
    'default' => env('DB_CONNECTION', 'mongodb'),

    'connections' => [
        'mongodb' => [
            'driver' => 'mongodb',
            'dsn' => env('MONGO_CONNECTION_STRING'),
            'database' => env('MONGO_DB_NAME', 'default'),
        ],
    ],

];