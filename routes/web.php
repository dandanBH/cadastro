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

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/lista', function () {
    return view('listar');
});

Route::get('/create/user','UserController@create');

Route::post('/inserir/user','UserController@store');




//Route::get('/home', 'HomeController@index')->name('home');

