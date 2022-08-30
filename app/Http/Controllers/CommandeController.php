<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\commandes;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $commande = commandes::all();
        return view('commandes/list', compact('commande'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('commandes/create');
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
                'produit' => ['required', 'string', 'max:100'],
                'quantite' => ['required', 'string', 'max:150'],
                'telephone' => ['required', 'string', 'max:25'],
                ]
        );
        
        if($verification)
        {
            // 
                $commande = commandes::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'produit' => $request['produit'],
                        'quantite' => $request['quantite'],
                        'telephone' => $request['telephone'],
                    ]
                );
                return redirect('/commandes/list');
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
        $commandes = commandes::findOrFail($id);
        return view('commandes.show', compact('commandes'));
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
        $commande = commandes::findOrFail($id);
        return view('commandes.edit', compact('commande'));
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
                'produit' => 'required',
                'quantite' => 'required',
                'telephone' => 'required',
            ]);
            $commande = commandes::whereId($id)->update($editer);
            return redirect('/commandes/list');
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
        $supprimer = commandes::findOrFail($id);
        $supprimer->delete();
        return redirect('/commandes/list');
    }
}
