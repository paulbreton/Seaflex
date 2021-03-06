<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\UeController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/etudiants', [EtudiantController::class, 'index']);
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show']);
Route::get('/etudiant/historique/{etudiant}', function () {
    return view('historique');
});

Route::get('/add', function () {
    return view('addEtu');
});
Route::get('/parcours', [ParcoursController::class, 'index']);
Route::get('/parcours/{parcours}', [ParcoursController::class, 'show']);

Route::get('/index', function () {
    return view('index');
});
Route::get('/ue', function () {
    return view('listeUE');
});
Route::get('/views', [ViewsController::class, 'index']);
