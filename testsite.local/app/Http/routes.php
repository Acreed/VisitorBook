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

Route::any('/', ['uses' => 'Site@index', 'as' => 'home']);
Route::get('message/[id]/edit', ['uses' => 'Site@edit', 'as' => 'message.edit'])->where(['id' => '[0-9]+']);
Route::post('/', function(){echo 'ye';});
