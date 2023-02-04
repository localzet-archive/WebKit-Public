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

    // 'domain' => 'https://example.com',
    // 'src' => 'https://src.example.com',
    // 'fonts' => 'https://fonts.example.com',

    'info' => [
        // 'name' => 'Название сайта',
        // 'description' => 'Описание',
        // 'keywords' => 'Ключевые слова',
        // 'viewport' => '',

        // 'logo' => 'URL логотипа',
        // 'og_image' => 'URL Изображения OpenGraph',

        // 'owner' => 'FirstName LastName (Nickname) <email>',
        // 'designer' => 'FirstName LastName (Nickname) <email>',
        // 'author' => 'FirstName LastName (Nickname) <email>',
        // 'copyright' => 'Company',
        // 'reply_to' => 'Email',
    ],
    'headers' => [
        'Content-Language' => 'ru',

        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Credentials' => 'true',
        'Access-Control-Allow-Methods' => '*',
        'Access-Control-Allow-Headers' => '*',

        'Server' => 'Triangle' . WEBCORE_VERSION,
    ],
];
