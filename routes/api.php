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

Route::middleware('auth:api')->get('/lessor', function (Request $request) {
    return $request->lessor();
});

Route::post('createRepublic', 'RepublicController@createRepublic');
Route::get('findRepublic/{id}', 'RepublicController@findRepublic');
Route::get('listRepublic', 'RepublicController@listRepublic');
Route::put('updateRepublic', 'RepublicController@updateRepublic');
Route::put('updateRepublic/{how_many_bedrooms}', 'RepublicController@updateRepublic');
Route::delete('deleteRepublic', 'RepublicController@deleteRepublic');

Route::post('createLessor', 'LessorController@createLessor');
Route::get('findLessor/{id}', 'LessorController@findLessor');
Route::put('updateLessor', 'LessorController@updateLessor');
Route::delete('deleteLessor', 'LessorController@deleteLessor');
