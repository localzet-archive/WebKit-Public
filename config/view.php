<?php
/**
 * @author    localzet<creator@localzet.ru>
 * @copyright localzet<creator@localzet.ru>
 * @link      https://www.localzet.ru/
 * @license   https://www.localzet.ru/license GNU GPLv3 License
 */

use support\view\Raw;
use support\view\Twig;
use support\view\Blade;
use support\view\ThinkPHP;

return [
    'handler' => Raw::class,
    'options' => [
        'view_suffix' => 'phtml'
    ]

];
