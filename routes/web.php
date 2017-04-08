<?php

Route::get('/', function () {
    return view('welcome');
});


/**
 * Route Administrator
 */
Route::group(['prefix'=>'admin'], function() {
    Route::get('/', 'Admin\HomeController@index');
});

/**
 * Route Customer
 */


