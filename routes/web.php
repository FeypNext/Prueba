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

//ruta principal de la pagina por metodo GET, ruta que estará controlada por HomeController ala funcion index
//llamamos directamente la funcion con el @  
Route::get('/home', 'HomeController@index')->name('home');
