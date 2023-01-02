<?php

/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.com/license GNU GPLv3 License
 */

use localzet\Core\Server;

return [
    'monitor' => [
        'handler' => process\Monitor::class,
        'reloadable' => false,
        'constructor' => [
            'monitor_dir' => array_merge(
                [
                    app_path(),
                    config_path(),
                    base_path() . '/autoload',
                    base_path() . '/process',
                    base_path() . '/support',
                    base_path() . '/resource',
                    base_path() . '/.env',
                ],
                glob(base_path() . '/plugin/*/app'),
                glob(base_path() . '/plugin/*/autoload'),
                glob(base_path() . '/plugin/*/config'),
                glob(base_path() . '/plugin/*/api')
            ),
            'monitor_extensions' => [
                'php', 'phtml', 'html', 'htm', 'env'
            ],
            'options' => [
                'enable_file_monitor' => !Server::$daemonize && DIRECTORY_SEPARATOR === '/',
                'enable_memory_monitor' => DIRECTORY_SEPARATOR === '/',
            ],
        ]
    ],
];
