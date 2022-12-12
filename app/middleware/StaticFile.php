<?php

/**
 * @package     Localzet Development Kit
 * @link        https://localzet.gitbook.io/
 * 
 * @author      Ivan Zorin (localzet) <creator@localzet.ru>
 * @copyright   Copyright (c) 2018-2022 Localzet Group
 * @license     https://www.localzet.com/license GNU GPLv3 License
 */

namespace app\middleware;

use localzet\FrameX\MiddlewareInterface;
use localzet\FrameX\Http\Response;
use localzet\FrameX\Http\Request;

/**
 * Class StaticFile
 */
class StaticFile implements MiddlewareInterface
{
    public function process(Request $request, callable $next): Response
    {
        // В static.forbidden прописан массив запрещённых частей адреса
        foreach (config('static.forbidden') as $needle) {
            if (strpos($request->path(), $needle) !== false) {
                return response('Недостаточно прав доступа', 403);
            }
        }

        /** @var Response $response */
        $response = $next($request);

        if (config('plugin.framex.cors.app.enable', false) === true) {
            $response->withHeaders(config('plugin.framex.cors.app.headers', []));
        }
        return $response;
    }
}
