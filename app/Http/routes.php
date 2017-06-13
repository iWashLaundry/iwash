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

Route::get('/', function () {
    return view('dashboard.content.index', ['page' => 'index']);
});

Route::get('/workflow', function () {
    return view('dashboard.content.workflow', ['page' => 'workflow']);
});

Route::get('/customers', function () {
    return view('dashboard.content.customers', ['page' => 'customers']);
});

Route::get('/inventory', function () {
    return view('dashboard.content.inventory', ['page' => 'inventory']);
});

Route::get('/analytics', function () {
    return view('dashboard.content.analytics', ['page' => 'analytics']);
});

Route::get('/profile', function () {
    return view('dashboard.content.profile', ['page' => 'profile']);
});
