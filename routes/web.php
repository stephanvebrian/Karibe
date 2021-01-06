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

Route::group(['middleware' => ['roles:Member,Admin']], function () {
    Route::get('/post/create', 'Frontend\PostController@create')->name('fe.post.create');
    Route::post('/post/store', 'Frontend\PostController@store')->name('fe.post.store');
    Route::post('/post/store-response', 'Frontend\PostController@storeResponse')->name('fe.post.store.comment');
});

Route::group(['middleware' => ['roles:Member']], function () {
    
});

Route::group(['middleware' => ['roles:Admin']], function () {
    Route::get('/admin/dashboard', 'Backend\DashboardController@home')->name('be.home');
    Route::get('/admin/post', 'Backend\PostController@index')->name('be.post');
    Route::get('/admin/user', 'Backend\UserController@index')->name('be.user');
    Route::get('/admin/comment', 'Backend\CommentController@index')->name('be.comment');
    Route::get('/admin/stats', 'Backend\PostController@index')->name('be.stats');
    
});

Route::get('/home', 'Frontend\HomeController@home')->name('fe.home');
Route::get('/post/{slug}', 'Frontend\PostController@show')->name('fe.post.show');

Auth::routes([ 'reset' => true, 'confirm' => false ]);

