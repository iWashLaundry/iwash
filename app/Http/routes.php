<?php

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

// Route::get('/', function () {
//     return view('dashboard.content.index', ['page' => 'index']);
// });

Route::get('/', function(){ return redirect('/home'); });

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('workflow', 'DashboardController@workflow');

    Route::get('customers', 'DashboardController@customers');

    Route::get('inventory', 'DashboardController@inventory');

    Route::get('analytics', 'DashboardController@analytics');

    Route::get('profile', 'DashboardController@profile');
});


Route::auth();

Route::get('/home', 'HomeController@index');
