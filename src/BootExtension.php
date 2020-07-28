<?php

namespace Aden\Tool;

use Encore\Admin\Admin;

trait BootExtension
{
    /**
     * {@inheritdoc}
     */
    public static function boot()
    {
        static::registerRoutes();

        Admin::extend('log-viewer', __CLASS__);
    }

    /**
     * Register routes for laravel-admin.
     *
     * @return void
     */
    protected static function registerRoutes()
    {
        parent::routes(function ($router) {
            /* @var \Illuminate\Routing\Router $router */
            $router->get('logs', 'Aden\Tool\LogController@index')->name('log-viewer-index');
            $router->get('logs/{file}', 'Aden\Tool\LogController@index')->name('log-viewer-file');
            $router->get('logs/{file}/tail', 'Aden\Tool\LogController@tail')->name('log-viewer-tail');
        });
    }

    /**
     * {@inheritdoc}
     */
    public static function loget()
    {
        parent::createMenu('Log get', 'logs', 'fa-database');

        parent::createPermission('Logs', 'ext.log-viewer', 'logs*');
    }
}
