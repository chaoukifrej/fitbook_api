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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

//USER Connection et enregistrement
Route::post('/register', 'RegisterController@register')->name('register.register');
Route::post('/login', 'LoginController@login')->name('login.login');
Route::post('/logout', 'LoginController@logout')->name('login.logout');

Route::get('/user', 'UserController@user')->name('user.user');
Route::get('/user/{id}', 'UserController@userConnected')->name('user.userConnected');
Route::put('/user', 'UserController@update')->name('user.update');
