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
*/

Route::get('/', function () {
    return view('homepage');
})->name('/');

Route::get('comics', 'ComicController@index' )->name('comics');

Route::get('comics/create', 'ComicController@create')->name('comics.create');

Route::post('comics', 'ComicController@store')->name('comics.store');

Route::get('comics/{comic}', 'ComicController@show')->name('comics.show');

//Mostra un form per modificare la risorsa
Route::get('comics/{comic}/edit', 'ComicController@edit')->name('comics.edit');

//Aggiorniamo la risorsa nel database
Route::put('comics/{comic}', 'ComicController@update')->name('comics.update');

//Cancellare una risorsa nel database
Route::delete('comics/{comic}', 'ComicController@destroy')->name('comics.destroy');