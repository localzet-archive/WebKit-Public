<?php

/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.ru/license GNU GPLv3 License
 */

use support\Request;

return [
    'debug' => true,
    'error_reporting' => E_ALL,
    'default_timezone' => 'Europe/Moscow',
    'request_class' => Request::class,
    'public_path' => base_path() . DIRECTORY_SEPARATOR . 'public',
    'runtime_path' => base_path(false) . DIRECTORY_SEPARATOR . 'runtime',
    'controller_suffix' => '',
    'controller_reuse' => true,

    // Текущий домен
    'domain' => 'https://www.rootx.ru',

    // RX Sources - Центр ресурсов и статики
    'src' => 'https://src.rootx.ru/{project}',

    // Шрифты RootX
    'fonts' => 'https://src.rootx.ru/fonts',

    // Для вызова из шаблонов
    // Логотип RootX (RX) - FrameX (FX)
    // .svg - со шрифтом Nunito, .png - без разницы
    'logo' => 'https://src.rootx.ru/RX-FX.svg', 
];
