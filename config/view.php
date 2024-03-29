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

use support\view\Raw;

return [
    'handler' => Raw::class,
    'options' => [
        'view_suffix' => 'phtml',
        'view_global' => true,   // true - шаблоны view_head и view_footer будут забираться из "\app_path() . '/view/' . config('view.options.view_...')"
        // 'view_head' => '',
        // 'view_footer' => '',
    ]

];
