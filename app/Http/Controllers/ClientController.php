<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\clients;

class ClientController extends Controller
{
    //
    public function viewForm(){
        return view('clients.clientRegister');
    }

    //cet objet est chargé de l'envoi des données dans la base de donnees -->
    
    public function registerClient(Request $request)
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
                'statut' => 'client',
                
                ]
            );

            // ici nous allons créer un clients

            if($user);
            {
                $clients = clients::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'telephone' => $request['telephone'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['password']),
                        'userId' => $user->id,
                        ]
                );

                return redirect('/login');
            }
        }
    }
}
