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

Route::post('createRepublic', 'RepublicController@createRepublic');
Route::get('findRepublic/{id}', 'RepublicController@findRepublic');
Route::get('listRepublic', 'RepublicController@listRepublic');
Route::put('updateRepublic', 'RepublicController@updateRepublic');
Route::delete('deleteRepublic', 'RepublicController@deleteRepublic');

Route::post('createUser', 'UserController@createUser');
