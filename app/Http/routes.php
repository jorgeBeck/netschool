<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('login', function(){
  return view('login');
});

Route::post('login', 'LoginController@login');
Route::match(['get', 'post'],'logout', 'LoginController@logout');

Route::get('alumno/principal', 'PrincipalController@devolver');
Route::get('alumno/calificaciones', 'PromedioController@devolver');
Route::get('alumno/perfil', 'PerfilController@devolver');

Route::get('maestro/principal', 'PrincipalProfController@devolver');
Route::get('maestro/perfil', 'PerfilProfController@devolver');
Route::get('maestro/grupos', 'GruposProfController@devolver');
