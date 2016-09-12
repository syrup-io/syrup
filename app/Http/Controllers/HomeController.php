<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use User;
use App\Http\Requests;
use Github;

class HomeController extends Controller
{
    public function index() {
        if (Auth::user()) {
            $client = new \Github\Client();
            $user = Auth::user();
            $token = $user->github_token;
            $method = Github\Client::AUTH_URL_TOKEN;
            $client->authenticate($token, $method);
            $authorizations = $client->api('authorizations')->all();
            dd($authorizations);
            return view('home.index');
        } else {
            return view('home.index');
        }
    }
    public function landing() {
        return view('home.landing');
    }
}
