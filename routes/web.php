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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aseguradoras', 'PagesController@aseg')->name('ase');
Route::get('/choferes', 'PagesController@drivers')->name('cho');
Route::get('/clientes', 'PagesController@clients')->name('cli');
//Route::get('/equipos', 'PagesController@equipos')->name('equ');
Route::get('/mantenimiento', 'PagesController@mantG')->name('fMant');
Route::get('/mantpreventivo', 'PagesController@mantP')->name('fMantPrev');
Route::get('/trabajos', 'PagesController@jobs')->name('fTrab');
Route::get('/seguros', 'PagesController@seguros')->name('seg');
Route::get('/usuarios', 'PagesController@users')->name('usu');


Route::resource('equipos', 'EquiposController');
Route::post('equipos', 'EquiposController@store');
Route::put('equipos', 'EquiposController@update');
Route::get('equipos/{id}', 'EquiposController@destroy')->name('equipo.delete');