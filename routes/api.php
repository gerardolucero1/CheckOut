<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->group(function(){
	Route::get('/user', 'AuthController@user');

	Route::post('/logout', 'AuthController@logout');

	Route::get('/user/get-rooms', 'AuthController@getRooms');
	Route::get('/rooms/get-room/{id}', 'AuthController@getRoom');
});

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');

Route::apiResource('/calendar', 'CalendarController');
