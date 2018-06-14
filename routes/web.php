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
<<<<<<< HEAD
// Route::post('urlGenerater', function () {
//     return 'generated';
// });
=======
//Route::post('urlGenerater', function () {
   // return 'generated';
//});
>>>>>>> 8d0e745ebbf233efa3f376d53b819db9c6cf2599
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/url', 'HomeController@makeURL');

<<<<<<< HEAD
Route::post('/url','Url_generatorController@url' );
=======
Route::post('/urlGenerater','Url_generatorController@url' );
>>>>>>> 8d0e745ebbf233efa3f376d53b819db9c6cf2599
