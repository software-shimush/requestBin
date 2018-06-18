<?php
use App\url_id;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});
Route::get('createBin', function () {
    return view('createBin');
});
//Route::post('urlGenerater', function () {
   // return 'generated';
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/url', 'HomeController@makeURL');


Route::post('/urlGenerater','Url_generatorController@makeUrl' );

Route::get('/getBins', 'StoreRequestsController@index');

Route::domain('{binName}.{User}.requestBin.local')->group(function () {
    Route::any('/', 'StoreRequestsController@store');
    });
