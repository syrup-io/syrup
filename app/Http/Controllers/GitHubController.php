<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use App\Helpers\Github;

class GitHubController extends Controller
{
    public function index(Github $github)
    {
        dd(Auth::user());
        dd($github->repos());
    }
}
