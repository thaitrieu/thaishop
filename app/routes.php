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

//App::bind('cart', function()
//{
//    return new Cart();
//});

Route::get('/', function()
{
    return Redirect::route('products.index');
});

Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');


Route::resource('products', 'ProductsController');

Route::resource('users', 'UsersController');

Route::resource('sessions', 'SessionsController');

Route::resource('carts', 'CartsController');

Route::get('manufacturer/{id?}', 'ManufacturersController@show');

Route::get('admin', function()
{
    return Redirect::to('users');
})->before('auth');

//Route::get('api', function()
//{
//    $response = Response::make(['test' => 'hej'], 200);
//    $response->headers->set('Content-Type', 'application/json');
//    return $response;
//});