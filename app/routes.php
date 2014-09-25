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

//App::bind('ProductRepositoryInterface', 'ProductRepository');



Route::get('/', function()
{
	return View::make('hello');
});

Route::get('products', ['as' => 'products', 'uses' => 'ProductsController@index']);

Route::get('addProduct', ['as' => 'products.addProduct', 'uses' => 'ProductsController@create']); //lav om til post

Route::get('create', ['as' => 'create', 'uses' => 'ProductsController@create']); ///// hvorfor må as ikke være products.create?

//App::bind('ProductRepositoryInterface', function()
//{
//    return new ProductRepository();
//});

