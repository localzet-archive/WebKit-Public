<?php

/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.ru/license GNU GPLv3 License
 */

return [
    'listen' => 'http://0.0.0.0:88',
    'subdomains' => [
        'enable' => false,
        'domain' => 'example.ru',
    ],
    'storage' => [
        'enable' => false,
        'ip' => '0.0.0.0',
        'port' => '8008'
    ],
    'transport' => 'tcp',
    'context' => [],
    'name' => 'FrameX',
    'count' => cpu_count() * 2,
    'user' => '',
    'group' => '',
    'reusePort' => false,
    'event_loop' => '',
    'stop_timeout' => 2,
    'pid_file' => runtime_path() . '/framex.pid',
    'status_file' => runtime_path() . '/framex.status',
    'stdout_file' => runtime_path() . '/logs/stdout.log',
    'log_file' => runtime_path() . '/logs/Core.log',
    'max_package_size' => 10 * 1024 * 1024
];
