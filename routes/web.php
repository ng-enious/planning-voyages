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
Auth::routes();

Route::get('/', function () {
    return view('aceuil');
});
Route::get('ajoutermoyendetransport', function () {
    return view('ajoutermoyendetransport');
});
Route::get('ajouterlieu', function () {
    return view('ajouterlieu');
  
  });
Route::get('suggerermoyendetransport', function () {
    return view('suggerermoyendetransport');
});
Route::get('suggererlieu', function () {
    return view('suggererlieu');
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
Route::get('suggerertrajet', function () {
    return view('suggerertrajet');

});





Route::get('/home', 'HomeController@index');
Route::post('/suggerertrajet', 'UserController@suggertrajet');
Route::post('/suggererlieu', 'UserController@suggerlieu');
Route::post('/suggerermoyendetransport', 'UserController@suggermoyen');

Route::post('/ajoutertrajet', 'UserController@ajoutertrajet');
Route::post('/ajouterlieu', 'UserController@ajouterlieu');
Route::post('/ajoutermoyendetransport', 'UserController@ajoutermoyen');

Route::get('/pagination', 'PaginationController@pagination');
Route::get('/paginationlieu', 'PaginationController@paginationlieu');
Route::get('/paginationmoyen', 'PaginationController@paginationmoyen');
Route::get('/paginationtrajet', 'PaginationController@paginationtrajet');
Route::get('/postdelete/{id}', 'PaginationController@postdelete');
Route::get('/postdeletelieu/{id}', 'PaginationController@postdeletelieu');
Route::get('/postdeletemoyen/{id}', 'PaginationController@postdeletemoyen');
Route::get('/postdeletetrajet/{id}', 'PaginationController@postdeletetrajet');
Route::get('/edituser/{id}', 'PaginationController@edituser');
Route::get('/rendreAdmin/{id}','PaginationController@rendreAdmin');
Route::get('/supprimerAdmin/{id}','PaginationController@supprimerAdmin');
Route::get('/edittrajet/{id}', 'PaginationController@edittrajet');
Route::get('/editmoyen/{id}', 'PaginationController@editmoyen');
