<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;
use Auth;
use App\Models\Panier;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paniers = Panier::all();
        return view('paniers.index', compact('paniers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paniers.create');
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
                'produit' => ['required', 'string', 'max:100'],
                'quantite' => ['required', 'string', 'max:150'],
                'date' => ['required', 'string', 'max:100'],
            ]
        );
        
        if($verification)
        {
            // 

                $user = Auth::user();
                $client= clients::where('userId', $user->id)->first();

                $paniers = Panier::create(
                    [  
                        'clientsId'=>$client->id,
                        'produit' => $request['produit'],
                        'quantite' => $request['quantite'],
                        'date' => $request['date'],

                    ]
                );
                return redirect('/paniers/index');
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
        $panier = Panier::findOrFail($id);
        return view('paniers.edit', compact('panier'));
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
                
                'produit' => 'required',
                'quantite' => 'required',
                'date' => 'date',

            ]);
            $panier = Panier::whereId($id)->update($editer);
            return redirect('/paniers/index');
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
        $supprimer = Panier::findOrFail($id);
        $supprimer->delete();
        return redirect('/paniers/index');
    }
}
