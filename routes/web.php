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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


// Methode pour ouvrir la Page hinzufuegen
Route::get('hinzufuegen', 'hinzufuegenController@index');
Route::get('loesche', 'loescheController@index');


Route::post('/insert', 'produkteController@insert');

Route::get('/insert', function () {
    return view('welcome');
});


Route::get('datatable', ['uses'=>'loescheController@datatable']);
Route::get('datatable/getposts', ['as'=>'datatable.getposts','uses'=>'loescheController@getPosts']);

Route::resource('itemCRUD','ItemCRUDController');
Route::get('users','usersController@index');
