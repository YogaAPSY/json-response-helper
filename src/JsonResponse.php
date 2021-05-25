<?php

/**
 * A json response helper for lumen|laravel framework.
 *
 * @author    iluckin <dev@iluckin.cn>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://dev.iluckin.cn/open-source
 */

namespace Turbo\Api\Helper;

use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\JsonResponse as Response;

class JsonResponse
{
    const
        KEY_CODE        = 'code',
        KEY_MESSAGE     = 'message',
        KEY_DATA        = 'data';

    /**
     * @param array $data
     * @param string $message
     * @param int $code
     * @param array $headers
     * @param int $httpStatusCode
     * @return Response
     */
    public static function response(int $code = Code::OK, string $message = 'OK', $data = [], array $headers = [], int $httpStatusCode = Response::HTTP_OK)
    {
        if (class_exists('Illuminate\Support\Facades\Config')) {
            $code = $code ?: Config::get('json-helper.response_meta_default.code', Code::OK);
            $message = $message ?: Config::get('json-helper.response_meta_default.message', Code::getStatusText(Code::OK));
            $data = $data ?: Config::get('json-helper.response_meta_default.data', []);
        }

        $response = new Response(
            static::makePayload($code, $message, $data),
            $httpStatusCode,
            static::withGlobalHeaders($headers)
        );

        if (class_exists('Illuminate\Http\Response')) {
            return $response;
        }

        return $response->send();
    }

    /**
     * @param $data
     * @param $message
     * @param $code
     *
     * @return array
     */
    public static function makePayload(int $code, string $message, $data)
    {
        $keys = [];
        if (class_exists('Illuminate\Support\Facades\Config')) {
            $keys = Config::get('json-helper.response_key_map', []);
        }

        return [
            $keys[static::KEY_CODE] ?? static::KEY_CODE         => $code,
            $keys[static::KEY_MESSAGE] ?? static::KEY_MESSAGE   => $message,
            $keys[static::KEY_DATA] ?? static::KEY_DATA         => empty($data) ? [] : $data
        ];
    }

    /**
     * @param array $headers
     * @return array
     */
    public static function withGlobalHeaders(array $headers = [])
    {
        if (class_exists('Illuminate\Support\Facades\Config')) {
            $headers = array_merge($headers, Config::get('json-helper.global_headers', []));
        }

        return $headers;
    }
}
