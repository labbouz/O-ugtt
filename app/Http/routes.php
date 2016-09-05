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

    Route::get('admins', ['as' => 'admins', 'uses' => 'UserController@observateur']);
    Route::get('observateurs_users', ['as' => 'observateurs', 'uses' => 'UserController@observateur']);
    Route::get('observateurs_regional', ['as' => 'observateurs-regional', 'uses' => 'UserController@observateur']);
    Route::get('observateurs_secteur', ['as' => 'observateurs-secteur', 'uses' => 'UserController@observateur']);

});

Route::group(['middleware' => 'web'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::auth();

    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

});

