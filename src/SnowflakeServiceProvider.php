<?php

namespace Jakyeru\Snowflake;

use Godruoyi\Snowflake\LaravelSequenceResolver;
use Godruoyi\Snowflake\Snowflake;
use Illuminate\Support\ServiceProvider;

class SnowflakeServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->singleton('snowflake', function ($app) {
            return (new Snowflake(config('snowflake.data_center', 1), config('snowflake.worker_node', 1)))
                ->setStartTimeStamp(strtotime(config('snowflake.start_date', '2022-01-01')) * 1000)
                ->setSequenceResolver(new LaravelSequenceResolver($app->get('cache.store')));
        });
    }

    public function boot()
    {

    }

    protected function registerConfiguration()
    {
        $this->publishes([
            __DIR__ . '/config/snowflake.php' => config_path('snowflake.php')
        ], 'config');
    }
}