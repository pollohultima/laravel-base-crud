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

Route::get('admin/comics', 'Admin\ComicController@index' )->name('admin.comics.index');

Route::get('admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');

Route::post('admin/comics', 'Admin\ComicController@store')->name('admin.comics.store');

Route::get('admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comics.show');

Route::get('admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');

Route::put('admin/comics/{comic}', 'Admin\ComicController@update')->name('admin.comics.update');

Route::delete('admin/comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comics.destroy');



Route::get('admin/posts', 'Admin\PostController@index')->name('admin.posts.index');

Route::get('admin/posts/create', 'Admin\PostController@create')->name('admin.posts.create');

Route::post('admin/posts', 'Admin\PostController@store')->name('admin.posts.store');

Route::get('admin/posts/{post}', 'Admin\PostController@show')->name('admin.posts.show');

Route::get('admin/posts/{post}/edit', 'Admin\PostController@edit')->name('admin.posts.edit');

Route::put('admin/posts/{post}', 'Admin\PostController@update')->name('admin.posts.update');

Route::delete('admin/posts/{post}', 'Admin\PostController@destroy')->name('admin.posts.destroy');