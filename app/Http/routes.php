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


use App\User;


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
    Route::post('login', ['uses' => 'Auth\AuthController@adminLogin']);

    Route::group(['middleware' => 'role:admin'], function () {
    	Route::get('/', ['as' => 'adminHome', 'uses' => 'AdminController@index']);
    });

});

    Route::get('test', function () {
        

        Mail::send('emails.test', ['name' => 'data'], function ($m) {
            $m->from('webmaster@stockfree.com', 'Stockfree');

            $m->to('keshav.rexweb@gmail.com', 'Keshavv')->subject('Verify email on Stockfree');
        });

    });

    
    Route::get('test2', 'Test@test2');


