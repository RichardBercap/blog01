<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get("/","frontend@index");
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource("usuario","usuario");
Route::resource("comprarapida","CompraController");
Route::resource("clientes","clienteController");
