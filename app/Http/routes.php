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

Route::group( ['middleware' => ['web' , 'admin', 'auth', 'acl'] ], function (){
    /*
     * user route
     */
    Route::get('myprofile', ['as' => 'myprofile', 'uses' => 'UserController@myProfile']);
    Route::post('myprofile/edit', ['as' => 'myprofile.edit', 'uses' => 'UserController@editMyProfile']);
    Route::patch('myprofile/update/{id}', ['as' => 'myprofile.update', 'uses' => 'UserController@updateMyProfile']);
    Route::post('myprofile/crop', ['as' => 'myprofile.crop', 'uses' => 'CropProfileController@cropMyProfile']);
    Route::get('myprofile/changepassword', ['as' => 'changepassword', 'uses' => 'UserController@changePassword']);
    Route::patch('myprofile/changepassword/{id}', ['as' => 'password.update', 'uses' => 'UserController@updateMyPassword']);


    Route::get('contacts', ['as' => 'contacts', 'uses' => 'UserController@contacts']);

    Route::resource('societe', 'SocieteController');
    Route::get('societe/{id}/delete', 'SocieteController@destroy');

    Route::resource('dossier', 'DossierController');
    Route::get('dossier/{id}/delete', 'DossierController@destroy');
    Route::get('dossier/create/{societe_id}', ['as' => 'dossier.create', 'uses' => 'DossierController@create']);

    Route::get('select-dossier', ['as' => 'dossier.select', 'uses' => 'DossierController@selectSociete']);


});

Route::group( ['middleware' => ['web' , 'admin', 'auth', 'acl'], 'is' => 'administrator|observateur_regional' ], function (){

    /*
 * Gestion des utilisateurs
 */
    Route::resource('users', 'UserController');

    Route::post('users/changePassword', 'UserController@updatePassword');
    Route::get('users/{id}/delete', 'UserController@destroy');



    Route::get('observateurs_users', ['as' => 'observateurs', 'uses' => 'UserController@observateur']);
});

Route::group( [
                'middleware' => ['web' , 'admin', 'auth', 'acl'],
                'is' => 'administrator'
    ], function (){

    Route::get('admins', ['as' => 'admins', 'uses' => 'UserController@admins']);
    Route::get('observateurs_regional', ['as' => 'observateurs-regional', 'uses' => 'UserController@observateurs_regional']);
    Route::get('observateurs_secteur', ['as' => 'observateurs-secteur', 'uses' => 'UserController@observateurs_secteur']);

    /*
    * Administration
    */
    Route::resource('secteur', 'SecteurController');
    Route::get('secteur/{id}/delete', 'SecteurController@destroy');


    Route::resource('move', 'MoveController');
    Route::get('move/{id}/delete', 'MoveController@destroy');

    Route::resource('delegation', 'DelegationController');
    Route::get('delegation/{id}/delete', 'DelegationController@destroy');

    Route::resource('structure_syndicale', 'StructureSyndicaleController');
    Route::get('structure_syndicale/{id}/delete', 'StructureSyndicaleController@destroy');

    Route::resource('violation', 'ViolationController');
    Route::get('violation/{id}/delete', 'ViolationController@destroy');
    Route::get('violation/create/{id_type_violation}', ['as' => 'violation.create_via_type', 'uses' => 'ViolationController@create']);

});


Route::group(['middleware' => 'web'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::auth();

    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('stats', ['as' => 'stats', 'uses' => 'HomeController@stats']);


    Route::get('ajax/delegations/{gouvernorat_id?}', ['as' => 'ajax.delegations', 'uses' => 'DelegationController@ajaxDelegationsByGouvernorat']);
    Route::get('ajax/conventions/{secteur_id?}', ['as' => 'ajax.conventions', 'uses' => 'ConventionController@ajaxConventionsBySecteur']);


});

