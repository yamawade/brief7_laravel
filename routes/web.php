<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
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
Route::post('/modifNote/{id}', [NoteController::class,'update']);
=======
Route::get('/modifie/eleve/{id}', [EleveController::class,'modifieEleve']);
Route::get('/suppEleve/{id}', [EleveController::class,'destroy']);
>>>>>>> 05c7ad113df30a84cb6bf3cfd6bf20324df2f63a
