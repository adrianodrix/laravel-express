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


Route::get('/', 'PostsController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);


Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::group(['prefix'=>'posts'], function(){
        Route::get('/',             ['as' => 'admin.posts.index',   'uses' => 'PostsAdminController@index']);
        Route::get('create',        ['as' => 'admin.posts.create',  'uses'=>'PostsAdminController@create']);
        Route::get('edit/{id}',     ['as' => 'admin.posts.edit',    'uses'=>'PostsAdminController@edit']);
        Route::get('destroy/{id}',  ['as' => 'admin.posts.destroy', 'uses'=>'PostsAdminController@destroy']);
        Route::put('update/{id}',   ['as' => 'admin.posts.update',  'uses'=>'PostsAdminController@update']);
        Route::post('store',        ['as' => 'admin.posts.store',   'uses'=>'PostsAdminController@store']);
    });
});