<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
//Route::post('login', 'UserController@login');
Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function()
{
   Route::get('details', 'UserController@details');
});


