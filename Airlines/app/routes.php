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

/*Route::get('/', function()
{
	return View::make('content.index');
});*/

Route::get('/','AirlinesController@index');

Route::get('/select','AirlinesController@select');

Route::get('/details','AirlinesController@details');