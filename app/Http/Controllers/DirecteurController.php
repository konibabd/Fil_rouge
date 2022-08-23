<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\directeurs;

class DirecteurController extends Controller
{
    //
    public function viewForm(){
        return view('directeurs.directeurRegister');
    }

    //cet objet est chargé de l'envoi des données dans la base de donnees -->
    
    public function registerDirecteur(Request $request)
    {
        //ici nous allons definir les actions à faire si la vérification est bonne

        $verification = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:150'],
                'email' => ['required', 'string', 'max:100'],
                'telephone' => ['required', 'string', 'max:25'],
                'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
                ]
        );

        // ici nous allons definir les normes que doivent respectées nos différents champs
        if($verification)
        {
            //nous allons créer un utilisateur avec les données saisons par l'utilisateur
            $user = User::create(
                [
                'name' => $request['prenom'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'statut' => 'directeur',
                
                ]
            );

            // ici nous allons créer un directeur

            if($user);
            {
                $directeur = directeurs::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'telephone' => $request['telephone'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['password']),
                        'userId' => $user->id,
                        ]
                );

                // ici on va rediriger directeur sur la page de login

                return redirect('/login');
            }
        }
    }

}
