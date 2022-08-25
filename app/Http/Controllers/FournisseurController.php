<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\fournisseurs;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fournisseur = fournisseurs::all();
        return view('fournisseurs/list', compact('fournisseur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fournisseurs/create');
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
                'adresse' => ['required', 'string', 'max:150'],
                'email' => ['required', 'string', 'max:100'],
                'telephone' => ['required', 'string', 'max:25'],
                ]
        );
        
        if($verification)
        {
            // 
                $fournisseur = fournisseurs::create(
                    [
                        'nom' => $request['nom'],
                        'adresse' => $request['adresse'],
                        'email' => $request['email'],
                        'telephone' => $request['telephone'],
                    ]
                );
                return redirect('/fournisseurs/list');
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
        $fournisseurs = fournisseurs::findOrFail($id);
        return view('fournisseurs.show', compact('fournisseurs'));
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
        $fournisseur = fournisseurs::findOrFail($id);
        return view('fournisseurs.edit', compact('fournisseur'));
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
                'adresse' => 'required',
                'email' => 'required',
                'telephone' => 'required',
            ]);
            $fournisseur = fournisseurs::whereId($id)->update($editer);
            return redirect('/fournisseurs/list');
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
        $supprimer = fournisseurs::findOrFail($id);
        $supprimer->delete();
        return redirect('/fournisseurs/list');
    }
}
