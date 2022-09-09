<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

//route to list all the books in the base data "index"
Route::get('index',[BookController::class,'index']);
//route to call the paginate method 
Route::get('paginate',[BookController::class,'paginate']);
//route to call the show method, this method is used to show a specific book, depends of the id.
Route::get('show/{id}',[BookController::class,'show']);
//route to call the store method, this method is used to save new books.
Route::post('store',[BookController::class,'store']);
//route to call the update method, this method is used to update a specific book, depends of the id.
Route::put('update/{id}',[BookController::class,'update']);
//route to call the delete method, this method is used to delete a specific book, depends of the id.
Route::delete('delete/{id}',[BookController::class,'destroy']);