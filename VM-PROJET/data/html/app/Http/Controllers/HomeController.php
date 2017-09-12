<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function conditions()
    {
        return view('conditions');
    }

    public function story()
    {
        return view('story');
    }
}
