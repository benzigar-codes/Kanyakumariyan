<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users',function ()
{
	return \App\User::all();
});

Route::get('/posts',function ()
{
	return \App\Post::all();
});

Route::get('/events',function ()
{
	return \App\Event::all();
});

Route::get('/shops',function ()
{
	return \App\Shop::all();
});

Route::get('/guides',function ()
{
	return \App\Guide::all();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
