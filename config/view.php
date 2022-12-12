<?php
/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.com/license GNU GPLv3 License
 */

use support\view\Raw;
// use support\view\Twig;
// use support\view\Blade;
// use support\view\ThinkPHP;

return [
    'handler' => Raw::class,
    'options' => [
        'view_suffix' => 'phtml',
        'view_global' => true,   // true - шаблоны view_head и view_footer будут забираться из "\app_path() . '/view/' . config('view.options.view_...')"
        // 'view_head' => '',
        // 'view_footer' => '',
    ]

];
