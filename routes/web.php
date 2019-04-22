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


Route::resource('books', 'BooksController');
Route::resource('authors', 'AuthorsController');
Route::resource('/api/v1/books', 'BookResourceController')->only(['index', 'show']);

Route::get('/posts', function () {
    return view('dashboard');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/', function () {
        return view('dashboard');      // dashboard - main admin page
    });

    Route::get('/{any}', function ($any) {
        // any other url, subfolders also
        return view('dashboard');
    })->where('any', '.*');

});

