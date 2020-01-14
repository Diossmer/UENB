<?php
use Barryvdh\DomPDF\Facade as PDF;
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
    Route::delete('{id}','Admin\AdminController@delete')->name('admin.delete');
    Route::put('/{id}','Admin\AdminController@update')->name("admin.update");
    Route::get('/{id}/edit','Admin\AdminController@edit')->name("admin.edit");
    Route::post('/','Admin\AdminController@store')->name("admin.store");
    Route::get('/create','Admin\AdminController@create')->name("admin.create");
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Admin\AdminLoginController@logout')->name('admin.logout');
});
Route::resource('user', 'Admin\UserController');

