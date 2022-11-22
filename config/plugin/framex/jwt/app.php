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
        'jwt' => [
                // HS256, HS384, HS512, RS256, RS384, RS512, ES256, ES384, Ed25519
                'algorithms' => 'HS256',

                /**
                 * Access-токен — это токен, который предоставляет доступ его владельцу к защищенным ресурсам сервера.
                 * 
                 * Обычно он имеет короткий срок жизни и может нести в себе дополнительную информацию, 
                 * такую как IP-адрес стороны, запрашивающей данный токен.
                 */
                'access_secret_key' => 'access_secret_key',
                'access_exp' => 7200,

                /**
                 * Refresh-токен — это токен, позволяющий клиентам запрашивать новые access-токены по истечении их времени жизни. 
                 * 
                 * Данные токены обычно выдаются на длительный срок.
                 */
                'refresh_secret_key' => 'refresh_secret_key',
                'refresh_exp' => 604800,
                'refresh_disable' => false,

                /** RFC 7519
                 * 4.1.  Registered Claim Names  . . . . . . . . . . . . . . . . .   9
                 *      4.1.1.  "iss" (Issuer) Claim  . . . . . . . . . . . . . . . .   9
                 *      4.1.2.  "sub" (Subject) Claim . . . . . . . . . . . . . . . .   9
                 *      4.1.3.  "aud" (Audience) Claim  . . . . . . . . . . . . . . .   9
                 *      4.1.4.  "exp" (Expiration Time) Claim . . . . . . . . . . . .   9
                 *      4.1.5.  "nbf" (Not Before) Claim  . . . . . . . . . . . . . .  10
                 *      4.1.6.  "iat" (Issued At) Claim . . . . . . . . . . . . . . .  10
                 *      4.1.7.  "jti" (JWT ID) Claim  . . . . . . . . . . . . . . . .  10
                 */

                /** 
                 * Чувствительная к регистру строка или URI, 
                 * которая является уникальным идентификатором стороны, 
                 * генерирующей токен 
                 */
                'iss' => 'FrameX (FX) JWT Module',

                /** 
                 * Чувствительная к регистру строка или URI, 
                 * которая является уникальным идентификатором стороны, 
                 * о которой содержится информация в данном токене
                 * 
                 * Значения с этим ключом должны быть уникальны в контексте стороны, генерирующей JWT.
                 */
                'sub' => 'Subject',

                /**
                 * Массив чувствительных к регистру строк или URI, 
                 * являющийся списком получателей данного токена. 
                 * 
                 * Когда принимающая сторона получает JWT с данным ключом, 
                 * она должна проверить наличие себя в получателях — иначе проигнорировать токен
                 */
                'aud' => 'Audience',

                /**
                 * Время в формате Unix Time, определяющее момент, когда токен станет невалидным
                 * 
                 * Задаётся параметрами access_exp и refresh_exp
                 */
                // 'exp' => 'access_exp' || 'refresh_exp'

                /**
                 * Время в формате Unix Time, определяющее момент, когда токен станет валидным
                 * 
                 * Задаётся при генерации
                 */
                // 'nbf' => time()

                /**
                 * Время в формате Unix Time, определяющее момент, когда токен был создан. 
                 * 
                 * iat и nbf могут не совпадать, 
                 * Например, если токен был создан раньше, чем время, когда он должен стать валидным
                 */
                // 'iat' => time()

                /**
                 * Строка, определяющая уникальный идентификатор данного токена (JWT ID)
                 */
                // 'jti' => time()


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
        ],
];
