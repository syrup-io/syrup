<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpers\Github;

class GitHubController extends Controller
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
