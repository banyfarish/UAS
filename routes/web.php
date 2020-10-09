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
//Route::get('articles/{id}','Articleontrollerr@articles{id}');

//route::get('/','HomeController@home');

route::get('/about','aboutController@index');

route::get('/articles/{id}','ArticlesController@index');

route::get('/contact','contactController@index');

Route::get('/', 'HomeController@index');
Route::get('/home1', 'HomeController1@index'); 
Auth::routes();
route::get('/home','HomeController@index')->name('home');