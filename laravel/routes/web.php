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

Route::get('/','HomeController@index');

Route::get('logout', function () {
    Auth::logout();
    return Redirect('/');
});

Route::get('/env', function () {
    return env('CONVOX_ENV', 'not find env');
});

Route::resource('products', 'ProductController');

Route::resource('pages', 'PageController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('racks', 'RackController');

Route::resource('rackapps', 'RackappController');

Route::resource('rackresources', 'RackresourceController');

Route::resource('databases', 'DatabaseController');

Route::resource('integrations', 'IntegrationController');
