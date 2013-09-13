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

Route::get('/', 'HomeController@showHome');

Route::get('/news', 'NewsController@showNews');
Route::get('/news/{id}', 'NewsController@showSingleNews')
	->where('id', '[0-9]+');

Route::get('/stats', 'StatsController@showGraphs');
Route::get('/stats.json', 'StatsController@getGraphsAjax');

