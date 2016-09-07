<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use GrahamCampbell\GitHub\Facades\GitHub;

class HomeController extends Controller
{
    public function index() {
        if (Auth::user()) {
            return view('home.index');
                // ->with(Github::me()->organizations());
        } else {
            return view('home.index');
        }
    }
    public function landing() {
        return view('home.landing');
    }
}
