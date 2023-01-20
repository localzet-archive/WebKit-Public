<?php

/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.com/license GNU GPLv3 License
 */

return [
    // HS256, HS384, HS512, RS256, RS384, RS512, ES256, ES384, Ed25519
    'algorithms' => 'HS256',

    'secureString' => '',

    'access_secret_key' => '',
    'access_exp' => 7200,

    'refresh_secret_key' => '',
    'refresh_exp' => 604800,
    'refresh_disable' => false,

    'iss' => 'FrameX',

    'leeway' => 60,

    /**
     * Приватный ключ токена доступа
     */
    'access_private_key' => <<<EOD
-----BEGIN RSA PRIVATE KEY-----
...
-----END RSA PRIVATE KEY-----
EOD,

    /**
     * Публичный ключ токена доступа
     */
    'access_public_key' => <<<EOD
-----BEGIN PUBLIC KEY-----
...
-----END PUBLIC KEY-----
EOD,

    /**
     * Приватный ключ токена обновления
     */
    'refresh_private_key' => <<<EOD
-----BEGIN RSA PRIVATE KEY-----
...
-----END RSA PRIVATE KEY-----
EOD,

    /**
     * Публичный ключ токена обновления
     */
    'refresh_public_key' => <<<EOD
-----BEGIN PUBLIC KEY-----
...
-----END PUBLIC KEY-----
EOD,
];
