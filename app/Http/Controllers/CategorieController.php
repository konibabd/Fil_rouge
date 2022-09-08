<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorie = categories::all();
        return view('categories/list', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories/create');
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
                'name' => ['required', 'string', 'max:100'],
                'description' => ['required', 'string', 'max:100'],
                'quantity' => ['required', 'string', 'max:150'],
                'image' => ['required', 'string'],
                'statut' => ['required', 'string', 'max:25'],

                ]
        );

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;

            $file->move('images/', $filename);
            $verification->image = $filename;
        }
        
        if($verification)
        {
            // 
                $categorie = categories::create(
                    [
                        'name' => $request['name'],
                        'description' => $request['description'],
                        'quantity' => $request['quantity'],
                        'image' => $request['image'],
                        'statut' => $request['statut'],
                    ]
                );
                return redirect('/categories/list');
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
        $categorie = categories::findOrFail($id);
        return view('categories.edit', compact('categorie'));
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
                'name' => 'required',
                'description' => 'required',
                'quantity' => 'required',
                'image' => 'required',
                'statut' => 'required',
            ]);
            $categorie = categories::whereId($id)->update($editer);
            return redirect('/categories/list');
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
        $supprimer = categories::findOrFail($id);
        $supprimer->delete();
        return redirect('/categories/list');
    }
}
