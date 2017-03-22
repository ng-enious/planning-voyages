<?php

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
    return view('aceuil');
});
Route::get('ajoutermoyendetransport', function () {
    return view('ajoutermoyendetransport');
});
Route::get('ajouterlieu', function () {
    return view('ajouterlieu');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('listeutilisateur', function () {
    return view('listeutilisateur');
});
Route::get('listesuggestion', function () {
    return view('listesuggestion');

});
Route::get('ajoutertrajet', function () {
    return view('ajoutertrajet');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
