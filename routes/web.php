<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//fronten
// Route::get('/','HomeController@index');
//prefix tiền tố 127.0.1/Web
//namespace đường dẫn của thư mục chứ HomeController
Route::namespace('Web')->group(function () {
    Route::get('/','HomeController@index'); 
});

//backen
Route::prefix('Admin')->namespace('Admin')->group(function () {
    Route::get('/login','LoginController@index'); 
    Route::post('/dashboard-login','LoginController@dashboard_login');
    Route::get('/logout','LoginController@logout'); 
    Route::get('/dashboard','AdminController@show_dashboard'); 
});

//news
Route::prefix('Admin')->namespace('Admin\News')->group(function () {
    Route::get('/show-news','NewsController@index'); 

    Route::get('/add-news','NewsController@index_create'); 
    Route::post('/save-news','NewsController@create'); 


});
