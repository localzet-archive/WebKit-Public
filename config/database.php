<?php

/**
 * @author    localzet<creator@localzet.ru>
 * @copyright localzet<creator@localzet.ru>
 * @link      https://www.localzet.ru/
 * @license   https://www.localzet.ru/license GNU GPLv3 License
 */

return [
    'default'               => 'mysql',
    'connections' => [
        'mysql' => [
            'driver'        => 'mysql',
            'host'          => '127.0.0.1',
            'port'          => 3306,
            'database'      => 'framex',
            'username'      => 'rootx',
            'password'      => '',
            'unix_socket'   => '',
            'charset'       => 'utf8',
            'collation'     => 'utf8_unicode_ci',
            'prefix'        => '',
            'strict'        => true,
            'engine'        => null,
        ],

        'sqlite' => [
            'driver'        => 'sqlite',
            'database'      => '',
            'prefix'        => '',
        ],

        'pgsql' => [
            'driver'        => 'pgsql',
            'host'          => '127.0.0.1',
            'port'          => 5432,
            'database'      => 'framex',
            'username'      => 'rootx',
            'password'      => '',
            'charset'       => 'utf8',
            'prefix'        => '',
            'schema'        => 'public',
            'sslmode'       => 'prefer',
        ],

        'sqlsrv' => [
            'driver'        => 'sqlsrv',
            'host'          => 'localhost',
            'port'          => 1433,
            'database'      => 'framex',
            'username'      => 'rootx',
            'password'      => '',
            'charset'       => 'utf8',
            'prefix'        => '',
        ],
    ],
];
