<?php

use App\Http\Controllers\ResultatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/succees', function () {
    return view('succees');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/enregistrer/sondage', [ResultatController::class, 'enregistrerSondage'])->name('enregistrer.sondage');

Route::resource('/resultat', ResultatController::class);
