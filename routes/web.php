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

Route::group(['namespace' => 'Admin','Middleware'=>'guest'], function () {
    Route::get('/admin','MainController@getHome')->name('admin');

    Route::group(['User'], function(){    	
        Route::get('/index','UserController@index')->name('index');
    	Route::get('/getCreat','UserController@getCreat')->name('getCreat');
    	Route::post('/postCreat','UserController@postCreat')->name('postCreat');

    	Route::get('/getUpdate/{id}', 'UserController@getUpdate')->name('getUpdate');
    	Route::post('/postUpdate/{id}', 'UserController@postUpdate')->name('postUpdate');

    	Route::get('/delete/{id}','UserController@delete')->name('delete');

    	Route::get('/search','UserController@search')->name('search');
    });

    Route::group(['login'],function(){
        Route::get('/login','LoginController@getLogin')->name('login');
        Route::post('/postLogin','LoginController@postLogin')->name('postLogin');

        Route::get('/register','LoginController@getRegister')->name('register');
        Route::post('/postRegister','LoginController@postRegister')->name('postRegister');

        Route::get('/logout', 'LoginController@logout')->name('logout');
    });
});
