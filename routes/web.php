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

Route::group(['namespace' => 'Admin'], function(){
    Route::get('/login','LoginController@login')->name('login');
    Route::post('/postLogin','LoginController@postLogin')->name('postLogin');

    Route::get('/register','LoginController@register')->name('register');
    Route::post('/postRegister','LoginController@postRegister')->name('postRegister');

    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
        Route::get('/', function(){
            return view('admin.home.main');
        });

        Route::group(['prefix' => ''],function(){
            Route::get('admin', 'UserController@index')->name('admin');
            Route::resource('user','UserController');
            Route::get('/search', 'UserController@search')->name('search');
        });

        Route::group(['prefix' => ''],function(){
            Route::resource('refer','ReferController');
            /*Route::get('/search', 'ReferController@search')->name('search');*/
        });
    });
});