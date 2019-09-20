<?php


Route::get('/role','ApiRoleController@index')->name('role');
route::get('/information/{id}','ApiUserController@index');
route::put('/information/{id}','ApiUserController@update');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('signup', 'AuthController@signup');

});

