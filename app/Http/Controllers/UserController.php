<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function getForm()
    {
        return view('form');
    }

    public function postForm(Request $request)
    {
        //return view('template');
        return 'Bienvenue' . $request->input('firstname');

    }
}
