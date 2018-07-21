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
    return view('welcome');
});

Route::group(array('prefix' => 'admin', 'namespace' => 'admin'), function (){

    Route::any('login', 'LoginController@login');
    Route::get('code', 'LoginController@code');
    Route::get('crypt', 'LoginController@crypt');

    Route::middleware(['web', 'admin.login'])->group(function (){
        Route::get('index', 'IndexController@index');
        Route::get('info', 'IndexController@info');
        Route::get('quit', 'LoginController@quit');
        Route::any('pass', 'IndexController@pass');
    });

    Route::resource('category', 'CategoryController');

});