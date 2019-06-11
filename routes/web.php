<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
*/ 

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::resource('projects', 'ProjectsController');
Route::get('gp_project', 'ProjectsController@gp_project_view');
Route::post('gp_project', 'ProjectsController@gp_project');
Auth::routes();
Route::get('/profile','ProfileController@index');
Route::post('/upload/profile','ProfileController@upload');
Route::post('/upload/faculty-data','ProfileController@uploadfaculty');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/departments','DepartmentsController@index');
Route::post('/departments/add','DepartmentsController@store');
Route::group(['middleware' => 'auth'], function() {
    Route::post('AddProject', 'DashboardController@SubmitProject');
});

Route::group(['middleware' => ['auth', 'admin']], function() {

		Route::get('admin/home', 'AdminController@index');
		Route::get('admin/all_users', 'AdminController@all_users');

});

Route::group(['middleware' => ['auth', 'Doctor']], function() {

		

});

Route::group(['middleware' => ['auth', 'student']], function() {
	
		Route::get('student/home', 'StudentController@index');

		Route::get('student/register_gp_SLeader', 'StudentController@register_gp_SLeader');

		Route::post('student/register_gp_SLeader_post', 'StudentController@register_gp_SLeader_post');

		Route::get('student/register_gp_Members', 'StudentController@register_gp_Members');

		Route::post('student/register_gp_Members_post', 'StudentController@register_gp_Members_post');

		Route::get('student/register_gp_Project', 'StudentController@register_gp_Project');

		Route::post('student/register_gp_Project_post', 'StudentController@register_gp_Project_post');

});

