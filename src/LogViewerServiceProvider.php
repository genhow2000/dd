<?php

namespace Aden\Tool;

use Illuminate\Support\ServiceProvider;

class LogGetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-admin-logs');

        LogGet::boot();
    }
}
