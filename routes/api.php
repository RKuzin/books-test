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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('admin/books', 'BookResourceController@index');
Route::post('admin/books/create', 'BookResourceController@store');
Route::get('admin/books/edit/{id}', 'BookResourceController@edit');
Route::post('admin/books/update/{id}', 'BookResourceController@update');
Route::delete('admin/books/delete/{id}', 'BookResourceController@destroy');
