<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Github;

class GitHubController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Github $github)
    {
        $user = Auth::user();
        dd($github->repos($user));
    }
}
