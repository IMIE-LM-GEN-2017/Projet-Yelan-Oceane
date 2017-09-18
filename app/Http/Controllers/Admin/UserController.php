<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Lib\Lists;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function dashboard()
    {
        return view('users.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show',['user' => $user]);
    } // Note : cette fonction est aussi présente dans de Controllers.UserController.php
    //DRY

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        // Insérer les listes déroulantes
        $depts = Lists::$departments;
        $regs = Lists::$regions;
        return view('users.edit', ['user' => $user,
                                        'departments'=>$depts,
                                        'regions'=>$regs]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
      /*  $this->validate($request, [
            'email' => 'required|email|unique:users',
        ]);*/
        $user = User::findOrFail($id);

        if ($user->update($request->all())) {
            Session::flash('message', 'Utilisateur mis à jour');
            return redirect()->route('Dashboard');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminUserEdit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        var_dump(auth()->user());
        Session::flash('message', 'Votre compte à été supprimé avec succès.');

        return redirect()->route('Home');
    }

}