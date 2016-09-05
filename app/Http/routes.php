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
Route::group( ['middleware' => ['web' , 'admin'] ], function (){
    /*
     * user route
     */
    Route::get('myprofile', ['as' => 'myprofile', 'uses' => 'UserController@myProfile']);


    /*
     * Gestion des utilisateurs
     */
    Route::resource('users', 'UserController');

});

Route::group(['middleware' => 'web'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::auth();

    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

});

