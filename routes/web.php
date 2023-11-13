<?php

use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/ajoutEleve',[EleveController::class,'create'] );
Route::post('/ajouterEleve',[EleveController::class,'store']);

Route::get('/listeEleve', [EleveController::class,'index']);

Route::get('/ajoutNote/{id}', function () {
    return view('Notes.ajoutNote');
});

Route::get('/listeNote', [NoteController::class,'index']);

Route::get('/modifierNote/{id}', [NoteController::class,'edit']);