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
 * Class LaravelServiceProvider
 * @package Turbo\Api\Helper
 */
class LaravelServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/json-helper.php',
            'json-helper'
        );
    }

    /**
     *
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/json-helper.php' => config_path('json-helper.php'),
        ]);
    }
}
