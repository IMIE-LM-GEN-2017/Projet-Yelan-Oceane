<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', ['users' => $user]);
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
