<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*LOGIN ADMIN*/

Route::post('auth/login', array('uses' => 'UserController@doLogin'));

Route::get('auth/logout', array('uses' => 'UserController@doLogout'));

/*LOGIN USER*/

Route::post('auth/loginuser', array('uses' => 'UserController@doLoginuser'));

Route::get('auth/logoutuser', array('uses' => 'UserController@doLogoutuser'));

/*HALAMAN SIGN_IN & REGISTER*/

Route::post('join_us', 'UserController@store');
Route::get('join_us', function()
{
	return View::make('join_us');
});

/*HALAMAN INDEX*/
Route::post('/', 'ContactController@store');
Route::post('index', 'ContactController@store');
Route::get('/', function()
{
	return View::make('index');
});

Route::get('index', function()
{
	return View::make('index');
});

/*HALAMAN NEWS*/

Route::get('news', 'NewsController@indexHomePage');

Route::post('detailnews/{id}', 'CommentsController@store');
Route::get('detailnews/{id}', function($id) {
		$data = News::find($id);
		$CommentsController=Comments::all();
		$CommentsController=Comments::paginate(3);
		return View::make('detailnews', compact('data'), compact('CommentsController'));
});

//BACK END

Route::get('administrator/index', function()
{
	return View::make('administrator/index');
});

Route::get('administrator/dashboard', function()
{
	return View::make('administrator/dashboard');
});

//POST NEWS

Route::post('administrator/addpost', 'NewsController@store');
Route::get('administrator/addpost', function()
{
	return View::make('administrator/addpost');
});

Route::get('editpost/{id}', function($id) {
		$data = News::find($id);
		return View::make('administrator/editpost', compact('data'));
});
Route::patch('editpost/{id}','NewsController@update');

Route::get('administrator/viewpost', 'NewsController@index');
Route::get('deletepost/{id}','NewsController@destroy');
