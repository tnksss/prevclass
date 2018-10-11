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
       
    Route::get('/unities/{unity}/create_manager','Admin\UnityController@createManager')->name('unities.manager');
    Route::post('/unities/managers','Admin\UnityController@managerStore')->name('manager.store');    
    Route::get('/managers', 'Admin\AdminController@managers')->name('managers');

    Route::get('/unities/{unity}/add_school_year','Admin\UnityController@addSchoolYear')->name('unities.schoolYear');
    Route::resource('disciplines', 'Admin\DisciplineController')->except(['show']);
    Route::resource('courses', 'Admin\CourseController')->except(['show']);
});

Route::prefix('manager')->group(function(){
    Route::get('/login', 'Auth\Manager\LoginController@showLoginForm')->name('manager.login');
    Route::post('/login', 'Auth\Manager\LoginController@login')->name('manager.login.submit');
    Route::get('/', 'Manager\ManagerController@index')->name('manager.home');
    Route::get('/logout', 'Auth\Manager\LoginController@logout')->name('manager.logout');
    Route::resource('unities', 'Manager\UnityController')->only([
        'show','edit','update'
    ])->names([
        'show' => 'manager.unity.show',
        'edit'=> 'manager.unity.edit',
        'update'=> 'manager.unity.update'
    ]);
    Route::get('/unities/{unity}/school_years','Manager\UnityController@schoolYears')->name('school-years');
    Route::get('/unities/{unity}/add_school_year','Manager\UnityController@addSchoolYear')->name('school-year.create');
    Route::post('/unities/school_years','Manager\UnityController@storeSchoolYear')->name('school-year.store');
    Route::resource('grades', 'Manager\GradeController');
    Route::get('profile','Manager\ManagerController@profile')->name('manager.profile');
    Route::patch('profile','Manager\ManagerController@profileUpdate')->name('manager-profile.update');
    Route::resource('students', 'Manager\StudentController');
});
