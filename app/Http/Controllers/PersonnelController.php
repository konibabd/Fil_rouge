<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\personnels;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personnel = personnels::all();
        return view('personnels/list', compact('personnel'));
    }

    public function dashboard()
    {
        return view('personnels.personnel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personnels/create');
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
        $verification = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:100'],
                'poste' => ['required', 'string', 'max:100'],
                'adresse' => ['required', 'string', 'max:150'],
                'email' => ['required', 'string', 'max:100'],
                'telephone' => ['required', 'string', 'max:25'],
                'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
            ]
        );
        
        if($verification)
        {
            // 
            $user = User::create(
                [
                'name' => $request['prenom'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'statut' => 'personnel',
                
                ]
            );

            if($user);
            {
                $personnel = personnels::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'poste' => $request['poste'],
                        'adresse' => $request['adresse'],
                        'email' => $request['email'],
                        'telephone' => $request['telephone'],
                        'password' => bcrypt($request['password']),
                        'userId' => $user->id,
                        ]
                );

                return redirect('/personnels/list');
                // return redirect('/login');
            }
        }
    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $personnels = personnels::findOrFail($id);
        return view('personnels.show', compact('personnels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $personnel = personnels::findOrFail($id);
        return view('personnels.edit', compact('personnel'));
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
        //
        {
            $editer = $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'poste' => 'required',
                'adresse' => 'required',
                'email' => 'required',
                'telephone' => 'required',
                'password' => 'required',

            ]);
            $personnel = personnels::whereId($id)->update($editer);
            return redirect('/personnels/list');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $supprimer = personnels::findOrFail($id);
        $supprimer->delete();
        return redirect('/personnels/list');
    }
}
