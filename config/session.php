<?php

/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.com/license GNU GPLv3 License
 */

use localzet\FrameX\Session\FileSessionHandler;
use localzet\FrameX\Session\RedisSessionHandler;
use localzet\FrameX\Session\RedisClusterSessionHandler;

return [

    'type' => 'file', // or redis or redis_cluster
    'handler' => FileSessionHandler::class,
    'config' => [
        'file' => [
            'save_path' => runtime_path() . '/sessions',
        ],
        'redis' => [
            'host' => '127.0.0.1',
            'port' => 6379,
            'auth' => '',
            'timeout' => 2,
            'database' => '',
            'prefix' => 'redis_session_',
        ],
        'redis_cluster' => [
            'host' => ['127.0.0.1:7000', '127.0.0.1:7001', '127.0.0.1:7001'],
            'timeout' => 2,
            'auth' => '',
            'prefix' => 'redis_session_',
        ]
    ],
    'session_name' => 'PHPSID',
    'auto_update_timestamp' => false,
    'lifetime' => 7 * 24 * 60 * 60,
    'cookie_lifetime' => 365 * 24 * 60 * 60,
    'cookie_path' => '/',
    'domain' => '',
    'http_only' => true,
    'secure' => false,
    'same_site' => '',
    'gc_probability' => [1, 1000],
];
