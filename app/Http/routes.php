<?php
 // use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

	// return View('routin', ['title' => 'Class Routine']);
	// return view('greetings', ['name' => 'Victoria']);

// Route::get('routine', ['as' => 'routine.index', 'uses' => 'RoutineController@index']);
// Route::get('/',function(){
// 	// return \App\User::first();
// 	//return array_keys(config('customConfig.roles'));
// 	return redirect()->route('login');
// });


Route::group(['middleware' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::get('user/create', ['as'=>'user.create','uses' => 'UsersController@create']);
	Route::post('user/store', ['as'=>'user.store','uses' => 'UsersController@store']);
	Route::post('login', array('uses' => 'Auth\AuthController@doLogin'));
	Route::post('reset', ['as' => 'reset-password', 'uses' => 'AuthController@resetRequest']);
	Route::get('login/reset_password/users', ['as' => 'reset-page', 'uses' => 'AuthController@resetPage']);
	Route::post('login/reset_password/users', ['as' => 'reset-process', 'uses' => 'AuthController@resetProcess']);


	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);

});

Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));


	//skill resource

	Route::get('skill', ['as' => 'skill.index', 'uses' => 'SkillController@index']);
	Route::get('skill/create', ['as' => 'skill.create', 'uses' => 'SkillController@create']);
	Route::post('skill', ['as' => 'skill.store', 'uses' => 'SkillController@store']);
	Route::get('skill/{id}/edit', ['as' => 'skill.edit', 'uses' => 'SkillController@edit']);
	Route::put('skill/{id}/update', ['as' => 'skill.update', 'uses' => 'SkillController@update']);
	Route::delete('skill/{id}', ['as' => 'skill.delete', 'uses' => 'SkillController@destroy']);

	// routine 

	Route::get('routine',['as' => 'routine.index', 'uses' => 'RoutineController@index']);
	Route::get('routine/create',['as' => 'routine.create', 'uses' => 'RoutineController@create']);
	Route::post('routine',['as' => 'routine.store', 'uses' => 'RoutineController@store']);
	Route::get('routine/{id}/edit',['as' => 'routine.edit', 'uses' => 'RoutineController@edit']);
	Route::get('routine/{id}/show',['as' => 'routine.show', 'uses' => 'RoutineController@show']);
	Route::put('routine/{id}',['as' => 'routine.update', 'uses' => 'RoutineController@update']);
	Route::delete('routine/{id}',['as' => 'routine.delete', 'uses' => 'RoutineController@destroy']);

	// projects

	Route::get('project',['as' => 'project.index', 'uses' => 'ProjectController@index']);
	Route::get('project/create',['as' => 'project.create', 'uses' => 'ProjectController@create']);
	Route::post('project',['as' => 'project.store', 'uses' => 'ProjectController@store']);
	Route::get('project/{id}/edit',['as' => 'project.edit', 'uses' => 'ProjectController@edit']);
	Route::get('project/{id}/show',['as' => 'project.show', 'uses' => 'ProjectController@show']);
	Route::put('project/{id}',['as' => 'project.update', 'uses' => 'ProjectController@update']);
	Route::delete('project/{id}',['as' => 'project.delete', 'uses' => 'ProjectController@destroy']);

	// dialogue

	Route::get('dialog',['as' => 'dialog.index', 'uses' => 'DialogController@index']);
	Route::get('dialog/create',['as' => 'dialog.create', 'uses' => 'DialogController@create']);
	Route::post('dialog',['as' => 'dialog.store', 'uses' => 'DialogController@store']);
	Route::get('dialog/{id}/edit',['as' => 'dialog.edit', 'uses' => 'DialogController@edit']);
	Route::get('dialog/{id}/show',['as' => 'dialog.show', 'uses' => 'DialogController@show']);
	Route::put('dialog/{id}',['as' => 'dialog.update', 'uses' => 'DialogController@update']);
	Route::delete('dialog/{id}',['as' => 'dialog.delete', 'uses' => 'DialogController@destroy']);

	// dialogue

	Route::get('notice',['as' => 'notice.index', 'uses' => 'NoticeController@index']);
	Route::get('notice/create',['as' => 'notice.create', 'uses' => 'NoticeController@create']);
	Route::post('notice',['as' => 'notice.store', 'uses' => 'NoticeController@store']);
	Route::get('notice/{id}/edit',['as' => 'notice.edit', 'uses' => 'NoticeController@edit']);
	Route::get('notice/{id}/show',['as' => 'notice.show', 'uses' => 'NoticeController@show']);
	Route::put('notice/{id}',['as' => 'notice.update', 'uses' => 'NoticeController@update']);
	Route::delete('notice/{id}',['as' => 'notice.delete', 'uses' => 'NoticeController@destroy']);

	// dialogue

	Route::get('file',['as' => 'file.index', 'uses' => 'FileController@index']);
	Route::get('file/create',['as' => 'file.create', 'uses' => 'FileController@create']);
	Route::post('file',['as' => 'file.store', 'uses' => 'FileController@store']);
	Route::get('file/{id}/edit',['as' => 'file.edit', 'uses' => 'FileController@edit']);
	Route::get('file/{id}/show',['as' => 'file.show', 'uses' => 'FileController@show']);
	Route::put('file/{id}',['as' => 'file.update', 'uses' => 'FileController@update']);
	Route::delete('file/{id}',['as' => 'file.delete', 'uses' => 'FileController@destroy']);


	Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@profile']);
	Route::put('profile/update', array('as' => 'profile.update', 'uses' => 'ProfileController@update'));
	Route::put('photo', array('as' => 'photo.store', 'uses' => 'ProfileController@photoUpload'));


});


Route::get('datatable',function(){
	return View::make('template.datatable')->with('title','Data Table');
});

