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

Route::get('/', 'HomeController@index');

Route::post('login', 'HomeController@login');

Route::get('dashboard', 'HomeController@dashboard');

Route::get('logout', 'HomeController@logout');

Route::get('users', 'HomeController@users');

Route::get('clients', 'HomeController@clients');

Route::get('billing', 'HomeController@billing');

Route::get('campains', 'HomeController@campains');

Route::get('pattern', 'HomeController@pattern');
