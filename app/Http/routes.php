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

Route::get('/', function () {

	// return View('routin', ['title' => 'Class Routine']);
	// return view('greetings', ['name' => 'Victoria']);
	return Redirect::route('dashboard');
});
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


	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);

});

Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
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




});

Route::get('datatable',function(){
	return View::make('template.datatable')->with('title','Data Table');
});

// routine 

	Route::get('routine',['as' => 'routine.index', 'uses' => 'RoutineController@index']);
	Route::get('routine/create',['as' => 'routine.create', 'uses' => 'RoutineController@create']);
	Route::post('routine',['as' => 'routine.store', 'uses' => 'RoutineController@store']);
	Route::get('routine/{id}/edit',['as' => 'routine.edit', 'uses' => 'RoutineController@edit']);
	Route::get('routine/{id}/show',['as' => 'routine.show', 'uses' => 'RoutineController@show']);
	Route::put('routine/{id}',['as' => 'routine.update', 'uses' => 'RoutineController@update']);
	Route::delete('routine/{id}',['as' => 'routine.delete', 'uses' => 'RoutineController@destroy']);

