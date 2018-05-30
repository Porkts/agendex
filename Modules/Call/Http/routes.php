<?php

Route::group(['middleware' => 'web', 'prefix' => 'call', 'namespace' => 'Modules\Call\Http\Controllers'], function()
{
    Route::get('/', 'CallController@index');
});
