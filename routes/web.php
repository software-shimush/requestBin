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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/url', 'HomeController@makeURL');

Route::get('/url', function() {
    $url=rand(10,1000000);
    
    $User=new url_id;
    $User->url_id=$url;
    $User->save();
    return url('/'.$url);  

});