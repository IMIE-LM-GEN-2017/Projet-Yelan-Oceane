<?php

namespace App\Http\Controllers;

use App\User;


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

    public function comments()
    {
        return view('comments');
    }
/*
    public function getForm()
    {
        return view('form');
    }

    public function postForm(Request $request)
    {
        //return view('template');
        return 'Bienvenue' . $request->input('firstname');
    }
*/

}
