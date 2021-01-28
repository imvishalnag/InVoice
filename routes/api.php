<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    Route::get('home/data/{type}', 'PostController@homePage');
    Route::get('post/{type}/{category}/{page}', 'PostController@postListWithCategory');
    Route::get('post/details/{id}', 'PostController@postList');
    Route::get('video/list/{type}/{page}', 'PostController@videoList');
    Route::get('video/list/{type}/{page}', 'PostController@videoList');

    // Push Api ID
    Route::post('device/id', 'PostController@deviceId');
});

