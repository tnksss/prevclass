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
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.userLogout');

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'Admin\AdminController@index')->name('admin.home');
    Route::get('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
    Route::resource('unities', 'Admin\UnityController');

});

Route::prefix('manager')->group(function(){
    Route::get('/login', 'Auth\Manager\LoginController@showLoginForm')->name('manager.login');
    Route::post('/login', 'Auth\Manager\LoginController@login')->name('manager.login.submit');
    Route::get('/', 'Manager\ManagerController@index')->name('manager.home');
    Route::get('/logout', 'Auth\Manager\LoginController@logout')->name('manager.logout');
    Route::resource('unities', 'Manager\UnityController');

});
