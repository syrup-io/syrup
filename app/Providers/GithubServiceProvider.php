<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Github;

class GithubServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\GithubContract', function(){
            return new Github();
        }); 
    }

    public function provides()
    {
        return ['App\Helpers\Contracts\GithubContract'];
    }
}
