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

use App\Http\Controllers\PessoaController;


Route::get('/','PessoaController@index');
Route::get('/create/pessoa','PessoaController@create');

Route::get('/edit/pessoa/{id}','PessoaController@edit');
Route::post('/inserir/pessoa','PessoaController@store');

Route::delete('/delete/pessoa/{id}','PessoaController@destroy');




//Route::get('/home', 'HomeController@index')->name('home');

