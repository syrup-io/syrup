<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use GitHub;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
        if (Auth::user()) {
            return view('home.index')
                // ->with(Github::me()->organizations());
                ->with('hi');
        } else {
            return view('home.index');
        }
    }
    public function landing() {
        return view('home.landing');
    }
}
