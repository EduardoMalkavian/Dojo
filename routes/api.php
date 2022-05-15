<?php

use App\Http\Controllers\BulkController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// bulks 
Route::get('bulks',[BulkController::class,'index']);
Route::get('bulks/{slug}',[BulkController::class,'show']);
Route::post('bulks',[BulkController::class,'store']);
Route::put('bulks/{slug}',[BulkController::class,'update']);
Route::delete('bulks/{slug}',[BulkController::class,'delete']);

// products
Route::get('products',[ProductsController::class,'index']);
Route::get('products/{id}',[ProductsController::class,'show']);
Route::post('products',[ProductsController::class,'store']);
Route::put('products/{id}',[ProductsController::class,'update']);
Route::delete('products/{id}',[ProductsController::class,'delete']);

//categories
Route::get('categories',[CategoriesController::class,'index']);
Route::get('categories/{id}',[CategoriesController::class,'show']);
Route::post('categories',[CategoriesController::class,'store']);
Route::put('categories/{id}',[CategoriesController::class,'update']);
Route::delete('categories/{id}',[CategoriesController::class,'delete']);
