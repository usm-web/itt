<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/
Route::get('/1', array('as'=>'/1', 'uses'=>'home@index'));
Route::get('/', array('as'=>'/', 'uses'=>'home@index'));
Route::post('authorization', array('uses'=>'users@authorization'));

Route::get('main', array('as'=>'main', 'uses'=>'home@main'));

Route::get('users',array('as'=>'users','uses'=>'users@index'));
Route::get('user/(:any)', array('as'=>'user', 'uses'=>'users@view'));
Route::get('users/new', array('as'=>'new_user', 'uses'=>'users@new'));
Route::post('users/create', array('uses'=>'users@create'));
Route::get('user/(:any)/edit', array('as'=>'edit_user', 'uses'=>'users@edit'));
Route::put('user/update', array('uses'=>'users@update'));
Route::delete('user/delete', array('uses'=>'users@destroy'));

Route::get('logout', array('as'=>'logout','uses'=>'users@logout'));

Route::get('norights', function(){
    return View::make('error.norights');
});

Route::get('ittasks/list',array('as'=>'list_ittask', 'uses'=>'ittasks@list'));
Route::get('ittask/(:any)', array('as'=>'ittask', 'uses'=>'ittasks@view'));
Route::post('ittask/ch', array('uses'=>'ittasks@ch'));

Route::get('ittasks/my',array('as'=>'my_ittask', 'uses'=>'ittasks@my'));

Route::get('ittasks/new',array('as'=>'new_ittask', 'uses'=>'ittasks@new'));
Route::post('ittasks/create', array('uses'=>'ittasks@create'));

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});