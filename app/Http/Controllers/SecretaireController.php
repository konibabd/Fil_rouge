<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\secretaires;

class SecretaireController extends Controller
{
    //
    public function viewForm(){
        return view('secretaires.secretRegister');
    }

    public function compte()
    {
        //
        $secretaire = secretaires::all();
        return view('secretaires.compte', compact('secretaire'));
    }

    public function dashboardSecret()
    {
        return view('secretaires.dashboard');
    }

    public function monapp()
    {
        return view('layouts.monapp');
    }

    //cet objet est chargé de l'envoi des données dans la base de donnees -->
    
    public function registerSecret(Request $request)
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
                'statut' => 'secretaire',
                
                ]
            );

            // ici nous allons créer un directeur

            if($user);
            {
                $secretaire = secretaires::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'telephone' => $request['telephone'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['password']),
                        'userId' => $user->id,
                        ]
                );
                $secretaire = secretaires::all();
                return view('/secretaires.compte', compact('secretaire'));
            }
        }
    }

    // public function compte()
    // {
    //     return view ('secretaires.compte');
    // }

    public function edit($id)
    {
        //
        $secretaire = secretaires::findOrFail($id);
        return view('secretaires.edit', compact('secretaire'));
    }

    public function update(Request $request, $id)
    {
        //
        {
            $editer = $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'telephone' => 'required',
                'email' => 'required',
                'password' => 'required',

            ]);
            $secretaire = secretaires::whereId($id)->update($editer);
            return redirect('/secretaires/compte');
        }
    }

    public function destroy($id)
    {
        //
        $supprimer = secretaires::findOrFail($id);
        $supprimer->delete();
        return redirect('/secretaires/compte');
    }
}
