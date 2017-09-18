<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SosController extends Controller
{
    public function getForm()
    {
        return view('sos.search');
    }

    public function postForm(Request $request)
    {
        /**Vérifier si la requête est correcte
         */
        $this->validate($request, [
            'region' => 'required|string',
            'department' => 'required|string',
        ]);

        /**Stocker temporairement cette requête
         */
        $regionSearched=$request->region;
        $departmentSearched=$request->department;
        var_dump($regionSearched, $departmentSearched);

        /**Récupérer tous les id des utilisateurs et leurs éléments
         * 1 - preparer la requete
         * 2 - faire la requete
         *      $i = $id->all();
         *ou    $i = $request->only('id', 'firstname', 'department', 'region');
         *ou    $users = User::all();
         */

        /**Créer un tableau pour stocker les résultat de la comparaison
         * $sameRegion = array();
         * $noSameRegion = array();
         */


        /**Comparer 'region' de la requête avec toutes les 'region' de la DTB
         **1 - Faire une boucle @foreach
         *
         *  - Récupérer les 'region' à comparer
         *
         * 2 - Comparer les 'region'
         *    $request('region') = $data(all('region');
         *
         * 3 - Si égalité, alors stocker le résultat dans un tableau
         *      Si non égalité, alors ne rien faire
         *

         * foreach($users as $user)
         * {
         *      function str_compare($regionSearched,$regionUser){
         *
                      if ($regionSearched == $regionUser){
         *
         *            return $regionUser => $sameRegion;
         *
         *            }elseif($regionSearch !== $regionUser){
         *
         *            return $regionUser => $noSameRegion;
         *
         *           }
         *
         *      }
         * }
        */




        /**Envoyer la liste avec les résultats
         * vers la vue sos.search
         */
        return view('sos.search_result');

    }
}
