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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/users', 'UsersController@index');
Route::post('admin/users/create', 'UsersController@create');

Route::get('admin/roles', 'RolesController@index');

Route::get('admin/permissions', 'PermissionsController@index');


Route::auth();

Route::get('/home', 'HomeController@index');
