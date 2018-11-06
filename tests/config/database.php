<?php
namespace LaravelFreelancerNL\Aranguent\test;

use ArangoDBClient\ConnectionOptions as ArangoConnectionOptions;

return [

    'connections' => [

        'arangodb' => [
            'name'       => 'arangodb',
            'driver'     => 'arangodb',
            ArangoConnectionOptions::OPTION_DATABASE => 'aranguent',
            ArangoConnectionOptions::OPTION_AUTH_USER => 'root',
            ArangoConnectionOptions::OPTION_AUTH_PASSWD => '',
        ],
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'mysql',
            'database'  => 'unittest',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

        'sqlite' => [
            'driver'    => 'sqlite',
            'database'  => ':memory:',
            'prefix'    => '',
        ]
    ],
];