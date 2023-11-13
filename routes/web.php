<?php

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

Route::get('/ajoutEleve', function () {
    return view('Eleves/ajoutEleve');
});

Route::get('/listeEleve', function () {
    return view('Eleves/listeEleve');
});
Route::get('/ajoutNote', function () {
    return view('Notes.ajoutNote');
});

Route::get('/listeNote', function () {
    return view('Notes.listeNote');
});
