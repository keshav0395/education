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

Route::get('/', ['as' => 'home' , function () {
    return view('welcome');
}]);

Route::auth();


Route::get('/home', 'HomeController@index');



Route::group(['middleware' => 'auth'], function () {

	Route::get('/admin', 'AdminController@index');

});


Route::group(['prefix' => 'admin'], function () {
    
    Route::get('login', ['as' =>'AdminLogin', 'uses' => 'AdminController@login']);

    Route::group(['middleware' => 'role:admin'], function () {
    	Route::get('/', 'AdminController@index');
    });

});

