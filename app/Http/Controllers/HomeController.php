<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Models\directeurs;
use App\Http\Models\secretaires;


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
           
            return view('directeurs.dashboard', );
        }
        elseif($user->statut == 'secretaire')
        {
            return view('secretaires.dashboard');
        }

        elseif($user->statut == 'client')
        {
            return view('clients.dashboard');
        }
       
      else{
            return view('home');
        }

    }

}
