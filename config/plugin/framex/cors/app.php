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
        'enable' => true,
        'headers' => [
                'Content-Language' => 'ru',
                
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Credentials' => 'true',
                'Access-Control-Allow-Methods' => '*',
                'Access-Control-Allow-Headers' => '*',

                'Server' => 'WebCore ' . config('app.core_version', WEBCORE_VERSION),
                'Server-Engine' => 'FrameX (FX) Engine ' . config('app.version', WEBKIT_VERSION),
        ],
];
