<?php

use Illuminate\Support\Facades\Route;

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
    return redirect(route('fe.home'));
});

Route::get('/home', 'Frontend\HomeController@home')->name('fe.home');
Route::get('/post/{slug}', 'Frontend\PostController@show')->name('fe.post.show');

Route::group(['middleware' => ['roles:Member']], function () {
    
});

Route::group(['middleware' => ['roles:Admin']], function () {
    
});

Route::group(['middleware' => ['roles:Member,Admin']], function () {
    Route::get('/post/create', 'Frontend\PostController@create')->name('fe.post.create');
    Route::post('/post/store', 'Frontend\PostController@store')->name('fe.post.store');
    
});

Auth::routes([ 'reset' => true, 'confirm' => false ]);

