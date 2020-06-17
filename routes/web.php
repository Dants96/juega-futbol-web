<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('series/game-of-thrones/', ['middleware' => 'age:18', function () {
    return "eres mayor de edad y puedes ver este contenido";
}]);

*/
Route::post('registrar', 'RegistroController@store')->name('registrar_post') ; //recurso para usuarios, usercontroler
Route::get('acceder', 'Seguridad\LoginController@index')->name('acceder');
Route::post('acceder', 'Seguridad\LoginController@login')->name('acceder_post');
Route::post('salir', 'Seguridad\LoginController@logout')->name('salir');
Route::get('partidos','reservaController@index');
Route::get('/misreservas', ['middleware' => 'auth', function(){
    return view('profile');
}]);


Route::get('/reservar', 'ReservaController@index')->name('reservar.listar');

Route::get('/', function(){
    return view('index');
});

Route::get('/registrar', function(){
    return view('register');
});

Route::get('/canchas','CanchaController@index');


Route::get('/contactos', function(){
    return view('contactos');
});


Route::get('/test', function(){
    return view('bookings');
});

Route::get('/perfil', function(){
    return view('profile');
});

Route::get('/camp', function(){
    return view('camp_profile');
});