<?php

/**
 * @author    localzet<creator@localzet.ru>
 * @copyright localzet<creator@localzet.ru>
 * @link      https://www.localzet.ru/
 * @license   https://www.localzet.ru/license GNU GPLv3 License
 */

return [
    'listen' => 'http://0.0.0.0:8787',
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
