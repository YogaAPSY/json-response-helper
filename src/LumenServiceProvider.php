<?php

/**
 * A json response helper for lumen|laravel framework.
 *
 * @author    iluckin <dev@iluckin.cn>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://dev.iluckin.cn/open-source
 */

namespace Turbo\Api\Helper;

use Illuminate\Support\ServiceProvider;

/**
 * Class LumenServiceProvider
 * @package Turbo\Api\Helper
 */
class LumenServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        $this->app->configure('json-helper');

        $this->mergeConfigFrom(
            realpath(__DIR__ . '/../config/json-helper.php'),
            'json-helper'
        );
    }
}
