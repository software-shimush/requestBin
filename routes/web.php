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
      
     Route::any('/getRequests', 'StoreRequestsController@getRequests');
     Route::get('/getHeaders', 'StoreRequestsController@getHeaders' );
     Route::get('/headers/{id}', 'StoreRequestsController@headersOfRequest');
    
    });
    

Route::domain('{User}.requestBin.local')->group(function () {
   

    Route::get('/', 'StoreRequestsController@getBins');
    Route::get('/getRequests/{binName}', 'StoreRequestsController@fetchRequests2');
    Route::get('/headers/{id}', 'StoreRequestsController@headersOfRequest3');

});

Route::get('/getRequests/{binName}', 'StoreRequestsController@fetchRequests');
Route::get('/getRequests/{binName}/headers','StoreRequestsController@headers' );
Route::get('/getRequests/headers/{id}', 'StoreRequestsController@headersOfRequest2');

Route::get('/', function () {
    return view('home');
});





