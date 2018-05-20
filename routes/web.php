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

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@index');
    Route::get('/post',function(){
        return view('blog.create');
    });
    Route::get('/{blog}', 'BlogController@show');
    Route::post('/find','BlogController@find');
    Route::post('/create', 'BlogController@create');
    Route::post('/{blog}/store', 'BlogController@store');
    Route::get('/{blog}/edit', 'BlogController@edit');
    Route::post('/{blog}/update', 'BlogController@update');
    Route::get('/{blog}/delete', 'BlogController@destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
