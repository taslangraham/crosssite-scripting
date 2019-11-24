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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Auth::user() ? view('home') : view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/modules', [
        'uses' => 'ModulesController@index', 'as' => 'modules.all'
    ]);

    Route::get('/module/{id}/{code}', [
        'uses' => 'ModulesController@getModuelByIdAndCode', 'as' => 'modules.single'
    ]);

    Route::post('/module/makeReview/{id}/{code}', [
        'uses' => 'ReviewController@makeReview', 'as' => 'module.make.review'
    ]);

    Route::get('/search', [
        'uses' => 'ModulesController@searcher', 'as' => 'search'
    ]);
});
