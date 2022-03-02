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


Route::namespace('Api')->group(function () {
    Route::post('/register', 'RegisterController@create');
    Route::post('/auth', 'LoginController@auth');
    Route::post('/userInfo', 'UserController@get');
    Route::post('/savePass', 'PassportController@save');
    Route::post('/delPass', 'PassportController@remove');
    Route::post('/getCountries', 'CountryController@index');
    Route::post('/userInfoSave', 'UserController@save');


    Route::post('/getAdventures', 'AdventureController@index');
    Route::post('/postWrite', 'AdventureController@postWrite');
    Route::post('/postComm', 'AdventureController@postComm');
    Route::post('/setLike', 'LikeController@create');
});
