<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirecteurController;
use App\Http\Models\directeurs;
use App\Http\Models\secretaires;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/directeur", [DirecteurController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/directeur-register', [App\Http\Controllers\DirecteurController::class, 'viewForm'])->name('dir.formview');
Route::post('/admin-create', [App\Http\Controllers\DirecteurController::class, 'registerDirecteur'])->name('dir.create');
Route::get('/directeur', [App\Http\Controllers\DirecteurController::class, 'dashboard'])->name('directeurs.dashboard');

Route::get('/secret-register', [App\Http\Controllers\SecretaireController::class, 'viewForm'])->name('secret.formview');
Route::post('/secret-create', [App\Http\Controllers\SecretaireController::class, 'registerSecret'])->name('secret.create');
Route::get('/secretaire', [App\Http\Controllers\SecretaireController::class, 'dashboardSecret'])->name('secretaires.dashboard');

Route::get('/client-register', [App\Http\Controllers\ClientController::class, 'viewForm'])->name('client.formview');
Route::post('/client-create', [App\Http\Controllers\ClientController::class, 'registerClient'])->name('client.create');
Route::get('/client', [App\Http\Controllers\ClientController::class, 'dashboardClient'])->name('clients.dashboard');


Route::get('/fournisseurs/list', [App\Http\Controllers\FournisseurController::class, 'index'])->name('fournisseur.liste');
Route::get('/fournisseurs/create', [App\Http\Controllers\FournisseurController::class, 'create'])->name('fournisseurs.create');
Route::post('/fournisseurs/list', [App\Http\Controllers\FournisseurController::class, 'store'])->name('fournisseurs.register');
Route::get('/fournisseur/{fourn}/edit', [App\Http\Controllers\FournisseurController::class, 'edit'])->name('fournisseurs.edit');
Route::patch('/fournisseurs/{fourn}/update', [App\Http\Controllers\FournisseurController::class, 'update'])->name('fournisseurs.update');
Route::get('/fournisseurs/{fourn}/destroy', [App\Http\Controllers\FournisseurController::class, 'destroy'])->name('fournisseurs.destroy');

Route::get('/personnels/list', [App\Http\Controllers\PersonnelController::class, 'index'])->name('personnel.liste');
Route::get('/personnels/create', [App\Http\Controllers\PersonnelController::class, 'create'])->name('personnels.create');
Route::post('/personnels/list', [App\Http\Controllers\PersonnelController::class, 'store'])->name('personnels.register');
Route::get('/personnel/{pern}/edit', [App\Http\Controllers\PersonnelController::class, 'edit'])->name('personnels.edit');
Route::patch('/personnels/{pern}/update', [App\Http\Controllers\PersonnelController::class, 'update'])->name('personnels.update');
Route::get('/personnels/{pern}/destroy', [App\Http\Controllers\PersonnelController::class, 'destroy'])->name('personnels.destroy');

Route::get('/commandes/list', [App\Http\Controllers\CommandeController::class, 'index'])->name('commande.liste');
Route::get('/commandes/create', [App\Http\Controllers\CommandeController::class, 'create'])->name('commandes.create');
Route::post('/commandes/list', [App\Http\Controllers\CommandeController::class, 'store'])->name('commandes.register');
Route::get('/commande/{comm}/edit', [App\Http\Controllers\CommandeController::class, 'edit'])->name('commandes.edit');
Route::patch('/commandes/{comm}/update', [App\Http\Controllers\CommandeController::class, 'update'])->name('commandes.update');
Route::get('/commandes/{comm}/destroy', [App\Http\Controllers\CommandeController::class, 'destroy'])->name('commandes.destroy');



