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
/*
/Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/', array('as' => 'index', 'uses' => 'HomeControllers@index'));

Route::get('show/{slug}', array('as' => 'show', 'uses' => 'HomeControllers@show'));

Route::get('users', array('as' => 'users', 'uses' => 'UsersController@getLogin'));
Route::controller('users', 'UsersController');


Route::get('admin', array('as' => 'newPost', 'uses' => 'AdminController@index'));
Route::controller('admin', 'AdminController');

//Route::controller('pages', 'HomeControllers');