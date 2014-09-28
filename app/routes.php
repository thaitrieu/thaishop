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
    return Redirect::route('products.index');
});

Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');


Route::resource('products', 'ProductsController');

Route::resource('users', 'UsersController');

Route::resource('sessions', 'SessionsController');

Route::get('users', function()
{
    return View::make('user.index');
})->before('auth');