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

Route::get('/', function () {
    return view('welcome');
});

//get zipcode
Route::get('/api/zip-codes/{zipcodeid}', 'ZipCodesController@show')->where('zipcodeid', '[0-9]+');

/*Route::get('/api/zip-codes/{zipcodeid}', 
function($id) {
    return zipcodes::find($id);
});*/