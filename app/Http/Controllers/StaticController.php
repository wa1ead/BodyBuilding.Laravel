<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function programs()
    {
        return view('programs');
    }

    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        return view('profile');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }
}
