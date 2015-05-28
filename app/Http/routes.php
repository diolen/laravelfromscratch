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

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'PagesController@index');

Route::get('about', 'PagesController@about');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Start Songs
$router->bind('songs', function($slug) {
    //return App\Song::whereSlug($slug)->first();
    return App\Song::where('slug', $slug)->first();
});

//get('songs', 'SongsController@index');
//get('songs/{song}', 'SongsController@show');
//get('songs/{song}/edit', 'SongsController@edit');
//patch('songs/{song}', 'SongsController@update');

//$router->resource('songs', 'SongsController', [
//    'only' => ['index', 'show', 'edit', 'update']
//    //'except' => ['create']
//]); 

//get('songs', ['as' => 'songs_path', 'uses' => 'SongsController@index']);
//get('songs/{song}', ['as' => 'song_path', 'uses' => 'SongsController@show']);

$router->resource('songs', 'SongsController', [
    'names' => [
        'index' => 'songs_path',
        'show' => 'song_path',
    ],
//    'only' => ['index', 'show']
]); 

// End Songs