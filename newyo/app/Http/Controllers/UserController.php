<?php

namespace App\Http\Controllers;

use App\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public $plop='1er';

    public function index()
    {
        $users = DB::table('users')->get();

        return view('users.index', ['users' => $users]);
    }
    /**
    public function add()
    {
    return view('user.add');
    }

    public function create(Request $request)
    {
    // validation des données
    $this->validate($request, [
    'name' => 'required|string',
    ]);

    $data = $request->all();
    $category = \App\Category::create($data);

    // Redirection et message
    if ($user->exists) {
    Session::flash('message', 'Nouvel utilisateur créé');
    return redirect()->route('UserIndex');
    } else {
    Session::flash('message', 'Une erreur est survenue');
    return redirect()->route('NewUser');
    }

    }
     **/

    public function delete($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

        Session::flash('message', 'Utilisateur supprimé');

        return redirect()->route('UserIndex');
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);

        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $user = UserModel::findOrFail($id);

        if ($user->update($request->all())) {
            Session::flash('message', 'Utilisateur mis à jour');
            return redirect()->route('UserIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('EditUser', ['id' => $id]);
        }
    }


    public function view($id)
    {
        $user = UserModel::findOrFail($id);

        return view('user.view', ['user' => $user]);
    }

}
