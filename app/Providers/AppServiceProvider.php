<?php

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Ensure unique IDs for MongoDB sessions
        Session::extend('mongodb', function ($app) {
            $connection = $app['db']->connection(config('session.connection'));
            $table = config('session.table');

            return new \MongoDB\SessionHandler($connection->getMongoDB(), $table);
        });
    }
}

