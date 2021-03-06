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

View::addExtension('html', 'php');

Route::get('/', function() {
    return view('spa.index');
});

Route::get('/responder', 'SiteController@responder');

Route::get('{catchall}', function($exception) {
    return view('spa.index');
})->where('catchall', '(.*)');