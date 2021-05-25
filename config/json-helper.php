<?php

/**
 * A json response helper for lumen|laravel framework.
 *
 * @author    iluckin <dev@iluckin.cn>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://dev.iluckin.cn/open-source
 */

return [

	/*
	|--------------------------------------------------------------------------
	| Response JSON keys mapping
	|--------------------------------------------------------------------------
	|
	| You can remap response JSON keys if really needed.
	|
	|
	| WARNING: there's NO duplicate check at runtime, so if you remap two keys
	| to the same values you will end up with problems. There's testing trait
	| to prevent this from happening, so ensure you unit test your app !
	|
	| if you want to use custom mapping.
	|
	| It's safe to completely remove/comment out this config element.
	|
	*/

	'response_key_map' => [
		Turbo\Api\Helper\JsonResponse::KEY_CODE    => 'code',
		Turbo\Api\Helper\JsonResponse::KEY_MESSAGE => 'message',
		Turbo\Api\Helper\JsonResponse::KEY_DATA    => 'data',
	],

	/*
	|--------------------------------------------------------------------------
	| Response meta data defaults
	|--------------------------------------------------------------------------
	|
	| Response meta data defaults
	|
	|
	*/

	'response_meta_default' => [
		'code' => 0,
		'message' => 'ok',
		'data' => []
	],

	/*
	|--------------------------------------------------------------------------
	| Response JSON with global headers
	|--------------------------------------------------------------------------
	|
	| response json with global http headers
	|
	|
	*/

	'global_headers' => [
		// 'X-AUTH-ID' => 'somethings'
	],


	/*
	|--------------------------------------------------------------------------
	| data-to-json encodong options
	|--------------------------------------------------------------------------
	|
	| This controls data JSON encoding. Since 3.1, encoding was relying on
	| framework defaults, however this caused valid UTF8 characters (i.e. accents)
	| to be returned escaped, which while technically correct (ant theoretically
	| transparent) might not be desired effects.
	|
	| To prevent escaping, add JSON_UNESCAPED_UNICODE (default since v3.2):
	|    JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_AMP|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE
	|
	| Laravel's value:
	|    JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_AMP|JSON_HEX_QUOT
	|
	| See http://php.net/manual/en/function.json-encode.php for details
	|
	*/

	// 'encoding_options' => JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_AMP|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE,
];
