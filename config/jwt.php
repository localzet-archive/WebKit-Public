<?php

/**
 * @package     T_University
 * @link        https://www.t-university.ru
 * 
 * @author      localzet <creator@localzet.ru>
 * 
 * @copyright   Copyright (c) 2018-2020 Zorin Projects 
 * @copyright   Copyright (c) 2020-2022 NONA Team
 * 
 * @license     https://www.localzet.ru/license GNU GPLv3 License
 */

$date = new \DateTime();
$date->setDate(2100, 12, 31);
$exp = floor($date->format('U'));

return [
    'key' => '',
    'alg' => 'HS256',
    'iss' => '',
    'aud' => '',
    'exp' => $exp
];
