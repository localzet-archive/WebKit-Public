<?php

/**
 * @package     Triangle Framework (WebKit)
 * @link        https://github.com/localzet/WebKit
 * @link        https://github.com/Triangle-org/Framework
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.com>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.com/license GNU GPLv3 License
 */

return [
    'listen' => 'http://0.0.0.0:88',
    'transport' => 'tcp',
    'context' => [],
    'name' => 'Triangle',
    'count' => cpu_count() * 4,
    'user' => '',
    'group' => '',
    'reusePort' => false,
    'event_loop' => '',
    'stop_timeout' => 2,
    'pid_file' => runtime_path() . '/triangle.pid',
    'status_file' => runtime_path() . '/triangle.status',
    'stdout_file' => runtime_path() . '/logs/stdout.log',
    'log_file' => runtime_path() . '/logs/server.log',
    'max_package_size' => 10 * 1024 * 1024
];
