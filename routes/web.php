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

// use Illuminate\Routing\Route;
use vendor\laravel\framework\src\Illuminate\Routing;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts','ContactController@index');

Route::group(['prefix'=>'ajax'],function(){
    Route::resource('contacts', 'Ajax\ContactController',[
        'only'=>['store']
    ]);
});