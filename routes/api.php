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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD
Route::get('/{id}', 'StoreRequestsController@update');
=======

Route::any('/{id}', 'StoreRequestsController@update');

>>>>>>> 8d0e745ebbf233efa3f376d53b819db9c6cf2599

