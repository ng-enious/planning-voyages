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
Route::get('test', function () {
    return view('test');

});
Route::get('test2', function () {
    return view('test2');

});
Route::get('mail', function () {
    return view('mmail');

});
Route::get('test3', function () {
    return view('test3');

});
Route::get('test4', function () {
    return view('test4');

});
Route::get('test123', function () {
  $trajet='';
    return view('test123');

});
Route::get('test5', function () {
    return view('test5');

});


Route::post('/get_trajet', 'UserController@get_trajet');




Route::get('/mailaccaptertrajet/{id}', 'MailController@mailaccaptertrajet');
Route::get('/testmail/{id}', 'MailController@testmail');
Route::get('/lieuaccepter/{id}', 'MailController@lieuaccepter');
Route::get('/mailsupprimertrajet/{id}', 'MailController@mailsupprimertrajet');
Route::get('/mailsupprimermoyen/{id}', 'MailController@mailsupprimermoyen');


Route::post('/ajoutertrajet', 'UserController@ajoutertrajet');
Route::get('/home', 'HomeController@index');
Route::post('/suggerertrajet', 'UserController@suggertrajet');
Route::post('/suggererlieu', 'UserController@suggerlieu');
Route::post('/suggerermoyendetransport', 'UserController@suggermoyen');

Route::post('/ajouterlieu', 'UserController@ajouterlieu');
Route::post('/test', 'UserController@test');
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
