<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
//    Route::get('articles', ['as' => 'articles.index', 'uses' => 'ArticlesController@index']);
//    Route::get('articles/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create']);
//    Route::get('articles/{id}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show']);
//    Route::post('articles', ['as' => 'articles.store', 'uses' => 'ArticlesController@store']);
//    Route::get('articles/{id}/edit', ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit']);
//    Route::patch('articles/{id}', ['as' => 'articles.update', 'uses' => 'ArticlesController@update']);
//    Route::delete('articles/{id}', ['as' => 'articles.destroy', 'uses' => 'ArticlesController@destroy']);

    Route::get('/', 'PostsController@index');
    Route::resource('posts', 'PostsController');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
