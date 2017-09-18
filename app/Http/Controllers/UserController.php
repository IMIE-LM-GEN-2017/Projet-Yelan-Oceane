<?php

namespace App\Http\Controllers;

use App\Lib\Lists;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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

    public function publicShow()
    {
        return view('users.public-show');
    }

    public function dashboard()
    {
        return view('users.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        // Insérer les listes déroulantes
        $depts = Lists::$departments;
        $regs = Lists::$regions;
        return view('users.edit', [
                'user' => $user,
                'departments' => $depts,
                'regions' => $regs
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
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
            Session::flash('message', 'Vos informations ont été mises à jour');
            return redirect()->route('Dashboard');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminUserEdit', ['id' => $id]);
        }
    }

    /**
     * Retourne la vue pour demander à l'utilisateur s'il est sûr de vouloir supprimer son compte.
     */
    public function confirmDelete()
    {

        return view('users.delete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
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


    /*
     * Commentaires de l'utilisateur
     * A COMPLETER
     */
    public function comments()
    {
        return view('comments');
    }


    /**
     * Recherche SOS
     * Envoie du formulaire pour la recherche
     */
    public function getFormSearch()
    {
        // Insérer les listes déroulantes
        $depts = Lists::$departments;
        $regs = Lists::$regions;

        return view('sos.search', [
                'departments' => $depts,
                'regions' => $regs
            ]
        );
    }

    public function postFormSearch(Request $request)
    {
        //Vérifier si la requête est correcte
        $data = $request->all();

        $results = User::query()->where('id', '>', 0);

        if (isset($data['results']) && !empty($data['results'])) {
            $results->orWhere('results', '=', $data['results']);
        }

        if (isset($data['department']) && !empty($data['department'])) {
            $results->orWhere('department', '=', $data['department']);
        }

        if (isset($data['pc']) && !empty($data['pc'])) {
            $results->orWhere('pc', 'LIKE', $data['pc']);
        }

        if (isset($data['city']) && !empty($data['city'])) {
            $results->orWhere('city', 'LIKE', '%' . $data['city'] . '%');
        }

        //Préparation de la requête
//
//        $users = User::query();
//        $users->select();
//
//        //Récupérer tous les éléments correspondant à 'results',
//        //à condition que la chaîne de caractère de 'results' soit égal à celui de la $request
//        if ($request->has('results')) {
//            $users->where('results', '=', '%' . $request->get('results') . '%');
//        }
//
//
//        //Stocker les résultats de la recherche dans la variable $resultats
//        $resultats = $users->get();
//        var_dump($resultats);
        //Retourner ces résultats dans la vue
        return view('sos.search_result', [
            'results' => $results->get(),
            'search' => $data
        ]);
    }
}


