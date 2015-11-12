<?php

Route::get('/', function () {
    return redirect('articles');
});
Route::get('/thumb/{size}/{filename}','AdminController@thumb');
Route::get('/admin','AdminController@index');
Route::get('/articles/{articles}/comments','ArticlesController@comments');
Route::put('/articles/{comment}/comments','ArticlesController@commentupdate');
Route::delete('/articles/{comment}/comments','ArticlesController@commentdelete');
Route::get('/users/setwriter/{id}','UsersController@setwriter');
Route::get('/users/unsetwriter/{id}','UsersController@unsetwriter');
Route::get('/articles/admin/list/{user_id?}','ArticlesController@adminList');
Route::post('/articles/{articles}/comment','ArticlesController@comment');


Route::get('/users','UsersController@index');
Route::get('/users/{id}/edit','UsersController@edit');
Route::get('/users/{id}/delete','UsersController@destroy');
Route::resource('articles','ArticlesController');
Route::controllers([
	'auth'	=>	'Auth\AuthController',
	'password'	=>	'Auth\PasswordController'
]);
