<?php

/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.com/license GNU GPLv3 License
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
            'password'      => 'rootx',
            'unix_socket'   => '',
            'charset'       => 'utf8',
            'collation'     => 'utf8_unicode_ci',
            'prefix'        => '',
            'strict'        => true,
            'engine'        => null,
        ],

        'sqlite' => [
            'driver'        => 'sqlite',
            'database'      => 'framex',
            'prefix'        => '',
        ],

        'pgsql' => [
            'driver'        => 'pgsql',
            'host'          => '127.0.0.1',
            'port'          => 5432,
            'database'      => 'framex',
            'username'      => 'rootx',
            'password'      => 'rootx',
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
            'password'      => 'rootx',
            'charset'       => 'utf8',
            'prefix'        => '',
        ],

        // Необходимо расширение и библиотека:
        // apt install php-dev
        // sudo pecl install mongodb
        // composer require jenssegers/mongodb ^3.8.0

        // 'mongodb' => [
        //     'driver'   => 'mongodb',
        //     'host'     => '127.0.0.1',
        //     'port'     =>  27017,
        //     'database' => 'test',
        //     'username' => null,
        //     'password' => null,
        //     'options' => [
        //         // здесь вы можете передать больше настроек в Mongo Driver Manager
        //         // https://www.php.net/manual/en/mongodb-driver-manager.construct.php в разделе «Uri Options» список полных параметров, которые вы можете использовать

        //         'database' => 'admin', // Обязательно для Mongo 3+
        //     ],
        // ],
    ],
];
