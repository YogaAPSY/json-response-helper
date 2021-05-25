<?php

/**
 * A json response helper for lumen|laravel framework.
 *
 * @author    iluckin <dev@iluckin.cn>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://dev.iluckin.cn/open-source
 */

use Turbo\Api\Helper\Code;
use Symfony\Component\HttpFoundation\JsonResponse as Response;

if (!function_exists('success')) {

    /**
     * @param array $data
     * @param string $message
     * @param int $code
     * @param array $headers
     * @param int $httpStatusCode
     * @return Response
     */
    function success(int $code = Code::OK, string $message = 'OK', $data = [], array $headers = [], int $httpStatusCode = Response::HTTP_OK)
    {
        return Turbo\Api\Helper\JsonResponse::response(
            $code,
            $message,
            $data,
            $headers,
            $httpStatusCode
        );
    }
}

if (!function_exists('fail')) {

    /**
     * @param string $message
     * @param int $code
     * @param array $data
     * @param array $headers
     * @param int $httpStatusCode
     * @return Response
     */
    function fail(int $code = Code::FAIL, string $message = 'Fail', $data = [], array $headers = [], int $httpStatusCode = Response::HTTP_OK)
    {
        return Turbo\Api\Helper\JsonResponse::response(
            $code,
            $message,
            $data,
            $headers,
            $httpStatusCode
        );
    }
}

if (!function_exists('status_text')) {

    /**
     * @param int $code
     * @return string
     */
    function status_text(int $code): string
    {
        return Turbo\Api\Helper\Code::getStatusText($code);
    }
}

if (!function_exists('unauthorized')) {

    function unauthorized(int $code = 401, $message = 'Unauthorized', $data = [], array $headers = [], int $httpStatusCode = 401)
    {
        return Turbo\Api\Helper\JsonResponse::response(
            $code,
            $message,
            $data,
            $headers,
            $httpStatusCode
        );
    }
}

if (!function_exists('not_found')) {

    function not_found(int $code = 404, $message = 'Not found', $data = [], array $headers = [], int $httpStatusCode = 404)
    {
        return Turbo\Api\Helper\JsonResponse::response(
            $code,
            $message,
            $data,
            $headers,
            $httpStatusCode
        );
    }
}
