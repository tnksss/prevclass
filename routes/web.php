<?php



Route::get('/', function () {
    return redirect()
                ->route('login');
});


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('teacher.logout');
Route::get('/home', 'Teacher\TeacherController@index')->name('teacher.home');
Route::get('grades/{grade}','Teacher\GradeController@show')->name('teacher.grade.show');
Route::patch('concepts/update','Teacher\ConceptController@update')->name('concepts.update');


Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'Admin\AdminController@index')->name('admin.home');
    Route::get('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
    Route::resource('unities', 'Admin\UnityController');
    Route::resource('unities.managers', 'Admin\ManagerController');   
    Route::get('/unities/{unity}/create_manager','Admin\ManagerController@create')->name('unities.manager');
    Route::post('/unities/managers','Admin\ManagerController@store')->name('manager.store');    
    Route::get('/managers', 'Admin\AdminController@managers')->name('managers');
    
    Route::resource('/unities/{unity}/courses', 'Admin\CourseController');
});

Route::prefix('manager')->group(function(){
    Route::get('/login', 'Auth\Manager\LoginController@showLoginForm')->name('manager.login');
    Route::post('/login', 'Auth\Manager\LoginController@login')->name('manager.login.submit');
    Route::get('/', 'Manager\ManagerController@index')->name('manager.home');
    Route::get('/logout', 'Auth\Manager\LoginController@logout')->name('manager.logout');
    Route::get('/my-unity','Manager\ManagerController@myUnity')->name('manager.myUnity');
    Route::resource('unities', 'Manager\UnityController')->only([
        'edit','update'
    ])->names([
        
        'edit'=> 'manager.unity.edit',
        'update'=> 'manager.unity.update'
    ]);
    
    Route::resource('grades', 'Manager\GradeController');
    Route::get('profile','Manager\ManagerController@profile')->name('manager.profile');
    Route::patch('profile','Manager\ManagerController@profileUpdate')->name('manager-profile.update');
    Route::resource('students', 'Manager\StudentController');
    
    Route::get('find-student','Manager\EnrollmentController@find')->name('enrollments.find-student');
    Route::post('find-student','Manager\EnrollmentController@findStudent')->name('enrollment.find');
    Route::post('enrollments','Manager\EnrollmentController@store')->name('enrollments.store');

    Route::resource('teachers','Manager\TeacherController');
    
    Route::get('find-teacher','Manager\SupplyController@find')->name('supplies.find-teacher');
    Route::post('find-teacher','Manager\SupplyController@findTeacher')->name('supplies.find');
    Route::post('supplies','Manager\SupplyController@store')->name('supplies.store');
    
});