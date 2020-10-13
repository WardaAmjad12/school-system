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

Route::get('/home', 'HomeController@index');
Route::get('/admin/home', 'AdminController@index');
Route::group(['namespace' => 'Auth', 'prefix' => 'admin'], function () {
    Route::get('login', 'AdminLoginController@showLoginForm')->name('login.admin');
    Route::post('login', 'AdminLoginController@login');
    Route::post('logout','AdminLoginController@logout')->name('admin-logout');
    });
Route::group(['namespace' => 'Auth', 'prefix' => 'student'], function () {
    Route::get('login', 'StudentLoginController@showLoginForm')->name('login.student');
    Route::post('login', 'StudentLoginController@login');
    Route::post('logout','StudentLoginController@logout')->name('student-logout');
    });
Route::get('/teacher', 'HomeController@teacher');
Route::get('/student', 'StudentController@student');
Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/update', 'HomeController@update')->name('update');
Route::get('/admin-dashboard','AdminController@admin_dashboard');
Route::post('/student/save', 'AdminController@save')->name('save.student');
Route::get('/edit/student', 'AdminController@student_profile')->name('student.profile');
Route::get('/all/student', 'AdminController@show_students')->name('allstudents');
Route::get('/Add/teacher', 'AdminController@teacher_profile')->name('teacher.profile');
Route::get('/all/teachers', 'AdminController@show_teachers')->name('allteachers');
Route::post('/teacher/save', 'AdminController@save_teacher')->name('save.teacher');
Route::get('delelete/{id}','AdminController@delete_teacher')->name('delete.teacher');
Route::get('view/{id}','AdminController@view')->name('view');
Route::get('edit/{id}','AdminController@edit')->name('edit');
Route::get('delete/{id}','AdminController@delete')->name('delete');
Route::post('/timetable_save', 'AdminController@table_insert'); 
Route::get('wholetimetable','HomeController@show_timetable')->name('timetable');
Route::get('timetable','StudentController@show_timetable')->name('whole.timetable');

Route::get('add/timetable',[
	'as' => 'admin.table',
	'uses' => 'AdminController@table']);
Route::get('edit-teacher/{id}',[
	'as' => 'edit.teacher',
	'uses' => 'AdminController@edit_teacher']);
Route::get('view/teacher/{id}',[
	'as' => 'view.teacher',
	'uses' => 'AdminController@view_teacher']);
Route::get('deletetimetable','AdminController@delete_timetable')->name('del.timetable');
Route::get('/attendences','AdminController@attendence')->name('attendence');

Route::get('teacher/attendence','HomeController@attendence')->name('teacher.attendence');
Route::post('attendence/login', 'HomeController@attendence_login')->name('login.attendence');

Route::get('/excel','HomeController@excel')->name('export-excel.excel');
Route::post('/excel_store','HomeController@store_excel');
Route::get('teacher/notes','HomeController@notes')->name('teacher.notes');
Route::get('teacher/upload/notes','HomeController@upload_notes')->name('teacher.uploadnotes');
Route::get('teacher/upload/videos','HomeController@upload_videos')->name('teacher.uploadvideos');
Route::get('teacher/upload/books','HomeController@upload_books')->name('teacher.uploadbooks');
Route::get('views/notes','HomeController@view_notes')->name('view.notes');
Route::get('views/videos','HomeController@view_videos')->name('view.videos');
Route::get('views/books','HomeController@view_books')->name('view.books');
Route::post('uploads/notes','HomeController@notes_uploads');
Route::post('uploads/videos','HomeController@upload_videos');
Route::post('uploads/books','HomeController@upload_books');