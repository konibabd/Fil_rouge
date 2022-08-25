<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $user = Auth::user();
        // dd($user);
        if($user->statut == 'directeur')
        {
            $directeur = directeurs::Where('userId', $user->id)->first();
            return view('directeurs.dashboard', compact('directeur'));
        }
        elseif($user->statut == 'secretaires')
        {
            return view('secretaires.dashboard');
        }

       
      else{
            return view('home');
        }
    


    }

    // public function liste()
    // {
    //     return view('administrateurs.listeEmployes');
    // }

    public function welcome()

    {
        return view('welcome');
    }
}
