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

//Route::get('/', 'HomeController@home');
//Route::get('/about','AboutController@about' );
//Route::get('articles/{id}','ArticlesControllerr@articles{id}');

Route::get('', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@about');
route::get('/articles/{id}','ArticlesController');
Route::get('/contact', 'ContactController@contact'); 
Auth::routes();

Route::get('/manage', 'ArticlesController@index')->name('manage');
Route::get('/manage2', 'komentarController@index')->name('manage2');

Route::get('/articles/add', 'ArticlesController@add');
Route::get('/komentar/add2', 'komentarController@add2');
Route::post('/articles/create', 'ArticlesController@create');
Route::post('/komentar/create2', 'komentarController@create2');
Route::get('/articles/edit/{id}', 'ArticlesController@edit');
Route::get('/komentar/edit2/{id}', 'komentarController@edit2');
Route::post('/articles/update/{id}','ArticlesController@update');
Route::post('/komentar/update2/{id}', 'komentarController@update2');
Route::get('/articles/delete/{id}','ArticlesController@delete');
Route::get('/komentar/delete2/{id}', 'komentarController@delete2');