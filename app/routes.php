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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('useform', 'BuatController@register');
Route::post('useform','BuatController@prosesInput');

Route::get('validate', 'ValidateController@utama');
Route::post('validate','ValidateController@process');

Route::get('userresults', function()
{
	return dd(Input::old());
});

Route::get('upload', function() {
	return View::make('fileform');
});

Route::post('upload','ValidateController@upload');

Route::get('login', 'RegistrationController@login');
Route::post('login', 'RegistrationController@authenticate');

Route::get('register','RegistrationController@register');
Route::post('register','RegistrationController@store');

Route::get('profile','RegistrationController@profile');

Route::group(array('before'=>'auth'), function()
{
	Route::get('logout',array('uses'=>'RegistrationController@logout'));
	Route::get('tambah','CrudController@tambahdata');
	Route::post('tambah','CrudController@store');
});
