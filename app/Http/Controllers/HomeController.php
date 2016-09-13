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
            $orgs = $client->api('current_user')->organizations();
            $repos = $client->api('current_user')->repositories();
            return view('home.index')
                ->with('orgs', $orgs)
                ->with('repos', $repos);
        } else {
            return view('home.index');
        }
    }
    public function landing() {
        return view('home.landing');
    }
}
