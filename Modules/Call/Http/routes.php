<?php

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'call', 'namespace' => 'Modules\Call\Http\Controllers'], function()
{
    Route::get('/', 'CallController@index');
    Route::resource('call', 'callController');

    // API
    Route::group(['middleware' => 'auth', 'prefix' => 'api'], function() {

    	// Available Times
    	Route::post('/availableSchedules', 'SchedulesController@availableSchedules');

    });

});
