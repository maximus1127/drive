<?php


Route::get('/', function () {
    return view('welcometemplate');
});

Auth::routes();

Route::get('/userIndex', 'UserController@index')->name('user'); //for students
Route::get('/home', 'HomeController@index')->name('home');


//for schools
Route::prefix('school')->middleware(['auth','school'])->group(function () {

Route::get('/','SchoolController@index')->name('school');
Route::get('/register_new_class', 'CourseController@create')->name('createClass');
Route::post('/register_new_class', 'CourseController@store')->name('createClass');
Route::get('/view_class/{id}', 'CourseController@show')->name('viewClass');
Route::get('/edit_class/{id}', 'CourseController@edit')->name('editClass');
Route::post('/edit_class/{id}', 'CourseController@update')->name('editClass');
Route::get('/addStudent', 'CourseController@addStudent')->name('addStudent');
Route::get('/submit_application', 'ApplicationsController@create')->name('submit.application');
Route::post('/submit_application', 'ApplicationsController@store')->name('submit.application');
Route::post('/completeDrive', 'DriveController@complete')->name('completeDrive');
Route::get('/school_instructor_list', 'InstructorsController@school_index')->name('school.instructors');
Route::get('/school_instructor_profile/{id}', 'InstructorsController@school_show')->name('school.instructor.profile');
});

//for the state
Route::prefix('auditor')->middleware(['auth','auditor'])->group(function () {
Route::get('/', 'AuditorController@index')->name('auditor');
Route::get('/student/{id}', 'UserController@show')->name('student.profile');
Route::get('/employee_show/{id}', 'UserController@delete')->name('employee.show');
Route::get('/instructor_profile/{id}', 'InstructorsController@auditor_show')->name('instructor.profile');
Route::get('/all_instructors', 'InstructorsController@auditor_index')->name('all.instructors');
Route::get('/instructor_applications', 'ApplicationsController@index')->name('instructor.applications');
Route::get('/application_review/{id}', 'ApplicationsController@show')->name('application.review');
Route::get('/application-approved/{id}', 'ApplicationsController@approved')->name('application.approve');
Route::get('/application-denied/{id}', 'ApplicationsController@denied')->name('application.deny');
Route::post('/application-notes-save/{id}', 'ApplicationsController@saveNotes')->name('application.save.note');
Route::post('/instructor-notes-save/{id}', 'InstructorsController@saveNotes')->name('instructor.save.note');
Route::get('/instructor-deactivate/{id}', 'InstructorsController@deactivate')->name('instructor.deactivate');
Route::get('/instructor-activate/{id}', 'InstructorsController@activate')->name('instructor.activate');
Route::post('/application-background-sent/{id}', 'ApplicationsController@backgroundSent');
Route::post('/application-background-received/{id}', 'ApplicationsController@backgroundReceived');
Route::get('/school_show/{id}', 'SchoolController@show')->name('school.show');
Route::get('/roster_school/roster/{id}', 'RostersController@show')->name('rosterView');
Route::get('/car-log/{id}', 'DriveController@show')->name('carLog');

});
