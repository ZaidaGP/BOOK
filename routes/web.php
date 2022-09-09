<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
    return redirect()->route('book.index');
});
Route::resource('book', BookController::class);
Route::get( '/createbook', 'App\Http\Controllers\BookController@create')
->name('createbook');

Route::get( '/editbook/{id}', 'App\Http\Controllers\BookController@edit')
->name('editbook');

Route::post( '/deletebook/{id}', 'App\Http\Controllers\BookController@destroy')
->name('destroybook');

Route::get( '/showbook/{id}', 'App\Http\Controllers\BookController@show')
->name('showbook');