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



Route::any('inicio',[
   'as' => 'inicio',
   'uses' => 'HomeController@inicio'
]);

Route::any('sobre',[
   'as' => 'sobre',
   'uses' => 'HomeController@sobre'
]);

Route::any('cadastrosangue',[
   'as' => 'cadastrosangue',
   'uses' => 'HomeController@cadastrosangue'
]);

Route::any('cadastroorgaos',[
   'as' => 'cadastroorgaos',
   'uses' => 'HomeController@cadastroorgaos'
]);

Route::any('doadoressangue',[
   'as' => 'doadoressangue',
   'uses' => 'HomeController@doadoressangue'
]);

Route::any('doadoresorgaos',[
   'as' => 'doadoresorgaos',
   'uses' => 'HomeController@doadoresorgaos'
]);

Route::any('email',[
   'as' => 'email',
   'uses' => 'HomeController@email'
]);

Route::any('sair',[
   'as' => 'sair',
   'uses' => 'HomeController@sair'
]);

Route::any('loginadm',[
   'as' => 'loginadm',
   'uses' => 'HomeController@loginadm'
]);

Route::resource('doador', 'MessageController');

Route::resource('orgaos', 'OrgaosController');

Route::any('emailEnviar',[
   'as' => 'doador.email',
   'uses' => 'MessageController@email'
]);

