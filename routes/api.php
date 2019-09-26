<?php


Route::get('/role','ApiRoleController@index')->name('role');
Route::get('/information/{id}','ApiUserController@index');
Route::put('/information/{id}','ApiUserController@update');
Route::Resource('announcement', 'AnnouncementController');
Route::Resource('assignment','AssaignmentController');
Route::Resource('class','LmsclassController');
Route::get('class/user/{id}','LmsclassController@user');
Route::Resource('material','MaterialController');
Route::get('material/single/{id}','MaterialController@material');
Route::get('class/about/{name}','LmsclassController@information');
Route::get('class/exam/{id}','LmsclassController@exam');
Route::Resource('/class/exam/exam','ExamController');
Route::Post('/class/exam/question','ExamController@QuestionCreate');
Route::Post('/class/exam/question/qcreative','ExamController@QcreativeCreate');


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

