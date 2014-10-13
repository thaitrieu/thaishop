<?php
use Guzzle\Http\Client;

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

Route::resource('payments', 'PaymentsController');

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

Route::get('clear', 'CartsController@destroy'); //midlertidig tøm kurven metode

Route::get('api', function(){
    define('API_KEY', '');
    define('API_SECRET', '');

    $client = new Client('http://zumoapi.dev/loyalty/v1');

//    $request = $client->get('lists?orderby=created_at&order=-1');
//    $request = $client->post('lists/1/members?firstname=Peter&lastname=Jackson&email=peter2@jackson.com');
//    $request = $client->get('lists/1/members/9f62d928-4f70-4276-87c2-1e840826dc90');
    $request = $client->get('campaigns/19');

    $requestTimestamp = gmdate("D, d M Y H:i:s") . ' GMT';

    $requestSignature = base64_encode(hash_hmac('sha256', $requestTimestamp, API_SECRET));

    $request->setAuth(API_KEY, $requestSignature);

    $request->addHeader('X-Request-Timestamp', $requestTimestamp);

    $response = $request->send()->json();

    var_dump($response);
});