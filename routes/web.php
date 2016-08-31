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

Auth::routes();

/*
 * Redirecionamentos
 */

Route::get('/', function () {
    return redirect('socios');
})->name('/');

Route::get('/home', function () {
    return redirect('socios');
});

Route::get('/register', function () {
    return redirect()->route('usuarios.create');
});

// Acesso restrito
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/usuarios', 'UserController');
    Route::resource('/socios', 'AssociateController');
    Route::resource('/empresas', 'BusinessController');
});