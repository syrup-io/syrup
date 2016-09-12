<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use User;
use GitHub;
use GrahamCampbell\GitHub\GitHubFactory;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
        if (Auth::user()) {
            $user = Auth::user();
            $token = $user->github_token;
            $client = new \Github\Client();
            $client->authenticate($token, 'http_token');
            $organizations = $client->api('current_user')->organizations();
            return view('home.index')
                ->with('organizations', $organizations);
        } else {
            return view('home.index');
        }
    }
    public function landing() {
        return view('home.landing');
    }
}
