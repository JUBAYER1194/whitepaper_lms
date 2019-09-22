<?php


Route::get('/role','ApiRoleController@index')->name('role');
Route::get('/information/{id}','ApiUserController@index');
Route::put('/information/{id}','ApiUserController@update');
Route::Resource('announcement', 'AnnouncementController');
Route::Resource('assignment','AssaignmentController');
Route::Resource('class','LmsclassController');
Route::Resource('material','MaterialController');
Route::get('class/about/{name}','LmsclassController@information');
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

