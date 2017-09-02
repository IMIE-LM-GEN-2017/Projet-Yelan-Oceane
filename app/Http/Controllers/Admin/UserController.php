<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }

    public function view()
    {
        $user = UserController::findOrFail($id);

        return view('admin.user.view', ['user' => $user]);
    }

    public function delete()
    {
        $user = UserController::findOrFail($id);
        $user->delete();

        session::flash()->route('UserIndex');
    }

    public function edit()
    {
        $user = UserController::findOrFail($id);

        return view('admin.user.edit', ['user' => $user]);
    }

    public function update(Request $requestUser, $id)
    {
        $this->validate($requestUser, [
            'name' => 'required|string',
        ]);
        $user = UserController::findOrFail($id);

        if ($user->update($requestUser->all())){
            \Session::flash('message', 'Ce compte à été mis à jour');
            return redirect()->route('userIndex');
        } else{
            Session::flash('message', 'Une erreur est surnenue lors de la mise à jour');
            return redirect()->route('EditCat', ['id' => $id]);
        }
    }
}
