<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/polaris', function () {
    return view('polaris');
});

Route::get('/ajoutEleve',[EleveController::class,'create'] );
Route::post('/ajouterEleve',[EleveController::class,'store']);

Route::get('/listeEleve', [EleveController::class,'index']);
Route::get('/detailEleve/{id}',[EleveController::class,'show']);

Route::get('/ajoutNote/{id}',[NoteController::class,'create']);
Route::post('/ajouterNote',[NoteController::class,'store']);


Route::get('/modifierNote/{id}', [NoteController::class,'edit']);
<<<<<<< HEAD

Route::get('/eleve/modifier/{id}', [EleveController::class,'edit']);
Route::post('/eleve/modifierEleve/{id}', [EleveController::class,'update']);

=======
Route::get('/modifie/eleve/{id}', [EleveController::class,'modifieEleve']);
Route::get('/suppEleve/{id}', [EleveController::class,'destroy']);
route::post('/modifNote/{id}',[NoteController::class,'update']);
route::get('/supprimerNote/{id}',[NoteController::class,'delete']);
Route::post('/modifNote/{id}', [NoteController::class,'update']);
Route::get('/modifie/eleve/{id}', [EleveController::class,'modifieEleve']);
Route::get('/suppEleve/{id}', [EleveController::class,'destroy']);
>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
