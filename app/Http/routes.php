<?php

Route::get('/', function () {
    return redirect('articles');
});
Route::post('/articles/{articles}/comment','ArticlesController@comment');
Route::get('/articles/admin/list','ArticlesController@adminList');
Route::resource('articles','ArticlesController');
Route::controllers([
	'auth'	=>	'Auth\AuthController',
	'password'	=>	'Auth\PasswordController'
]);
