<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    'uses' => 'MainController@index',
    'as' => 'index',
]);

Route::get('/success/{shorted}', [
    'uses' => 'MainController@success',
    'as' => 'success',
]);

Route::get('/{shorted}', [
    'uses' => 'MainController@link',
    'as' => 'link',
]);

Route::post('/short', [
    'uses' => 'MainController@short',
    'as' => 'short',
]);
