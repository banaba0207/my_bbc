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
    Route::get('articles', 'ArticlesController@index');

    Route::get('articles/create', 'ArticlesController@create');

    Route::get('articles/{id}', 'ArticlesController@show');

    Route::post('articles', 'ArticlesController@store');

    Route::get('articles/{id}/edit', 'ArticlesController@edit');  // 追加
    Route::patch('articles/{id}', 'ArticlesController@update');  // 追加
    Route::delete('articles/{id}', 'ArticlesController@destroy');  // 追加
    Route::get('prime/{num}', 'MathController@show');
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
