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

Route::get('sLogin', 'AuthController@sLogin');
Route::post('sVerify', 'AuthController@sVerify');
Route::get('sLogout', 'AuthController@sLogout');

$router->group(['middleware' => ['auth']], function ($router) {

    /* LOCATION ROUTES BEGIN */

    Route::get('/', 'LocationController@index');
    Route::post('addLocation', 'LocationController@addLocation');
    Route::post('editLocation', 'LocationController@editLocation');
    Route::post('getLocation', 'LocationController@getLocation');
    Route::get('print/{id}', 'LocationController@printIt');

    /* LOCATION ROUTES END */

    /* LOCATION IMAGE ROUTES BEGIN */

    Route::get('image/{name}', 'ImageController@download');
    Route::get('image/delete/{id}', 'LocationController@deleteImage');

    /* LOCATION IMAGE ROUTES END */

    /* AUTHORIZATION ROUTES BEGIN */

    Route::post('auth', 'AuthController@auth');
    Route::post('auth/verify', 'AuthController@verify');
    Route::post('auth/logout', 'AuthController@logout');

    Route::post('auth/change', 'AuthController@change');
    Route::post('auth/change/check', 'AuthController@check');
    Route::post('auth/change/changed', 'AuthController@changed');

    /* AUTHORIZATION ROUTES END */

});