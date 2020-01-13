<?php

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
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Admin\AdminLoginController@logout')->name('admin.logout');
});

Route::resource('user', 'Admin\UserController');
