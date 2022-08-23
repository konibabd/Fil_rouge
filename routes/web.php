<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirecteurController;

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

Route::get('/secret-register', [App\Http\Controllers\SecretaireController::class, 'viewForm'])->name('secret.formview');
Route::post('/secret-create', [App\Http\Controllers\SecretaireController::class, 'registerSecret'])->name('secret.create');

Route::get('/client-register', [App\Http\Controllers\ClientController::class, 'viewForm'])->name('client.formview');
Route::post('/client-create', [App\Http\Controllers\ClientController::class, 'registerClient'])->name('client.create');

Route::get('/fournisseurs/list', [App\Http\Controllers\FournisseurController::class, 'index'])->name('fournisseur.liste');
Route::get('/fournisseurs/create', [App\Http\Controllers\FournisseurController::class, 'create'])->name('fournisseurs.create');
Route::post('/fournisseurs/list', [App\Http\Controllers\FournisseurController::class, 'store'])->name('fournisseurs.register');
Route::get('/fournisseur/{fourn}/edit', [App\Http\Controllers\FournisseurController::class, 'edit'])->name('fournisseurs.edit');
Route::patch('/fournisseurs/{fourn}/update', [App\Http\Controllers\FournisseurController::class, 'update'])->name('fournisseurs.update');

// Route::resource('/fournisseurs', FournisseurController::class);