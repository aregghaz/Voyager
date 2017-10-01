<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = App\Post::all();
    return view('home', compact('posts'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/admin/home', function () {
        return view('home');
    });


});
