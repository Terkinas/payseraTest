<?php

namespace terkinas\contact;

use Illuminate\Support\ServiceProvider;

class PayseraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
    }

    public function register()
    {
    }
}
