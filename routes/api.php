<?php

use App\Http\Controllers\BulkController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockLocationController;
//use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypePaymentController;
//use App\Http\Controllers\UserHasCustomerController;
//use App\Http\Controllers\AlternativeUnitController;
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
Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{id}',[CategoryController::class,'update']);
Route::delete('categories/{id}',[CategoryController::class,'delete']);

//customers
Route::get('customers',[CustomerController::class,'index']);
Route::get('customers/{id}',[CustomerController::class,'show']);
Route::post('customers',[CustomerController::class,'store']);
Route::put('customers/{id}',[CustomerController::class,'update']);
Route::delete('customers/{id}',[CustomerController::class,'delete']);

//orders_items
Route::get('orders_items',[OrderItemController::class,'index']);
Route::get('orders_items/{seq}',[OrderItemController::class,'show']);
Route::post('orders_items',[OrderItemController::class,'store']);
Route::put('orders_items/{seq}',[OrderItemController::class,'update']);
Route::delete('orders_items/{seq}',[OrderItemController::class,'delete']);

//orders
Route::get('orders',[OrderController::class,'index']);
Route::get('orders/{id}',[OrderController::class,'show']);
Route::post('orders',[OrderController::class,'store']);
Route::put('orders/{id}',[OrderController::class,'update']);
Route::delete('orders/{id}',[OrderController::class,'delete']);

//stocks_locations
Route::get('stocks_locations',[StockLocationController::class,'index']);
Route::get('stocks_locations/{id}',[StockLocationController::class,'show']);
Route::post('stocks_locations',[StockLocationController::class,'store']);
Route::put('stocks_locations/{id}',[StockLocationController::class,'update']);
Route::delete('stocks_locations/{id}',[StockLocationController::class,'delete']);

/*
//stocks
Route::get('stocks',[StockController::class,'index']);
Route::get('stocks/{???}',[StockController::class,'show']);
Route::post('stocks',[StockController::class,'store']);
Route::put('stocks/{???}',[StockController::class,'update']);
Route::delete('stocks/{???}',[StockController::class,'delete']);
*/

//users
Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::post('users',[UserController::class,'store']);
Route::put('users/{id}',[UserController::class,'update']);
Route::delete('users/{id}',[UserController::class,'delete']);

//type_payments
Route::get('type_payments',[TypePaymentController::class,'index']);
Route::get('type_payments/{id}',[TypePaymentController::class,'show']);
Route::post('type_payments',[TypePaymentController::class,'store']);
Route::put('type_payments/{id}',[TypePaymentController::class,'update']);
Route::delete('type_payments/{id}',[TypePaymentController::class,'delete']);

/*
//user_has_customers
Route::get('user_has_customers',[UserHasCustomerController::class,'index']);
Route::get('user_has_customers/{??}',[UserHasCustomerController::class,'show']);
Route::post('user_has_customers',[UserHasCustomerController::class,'store']);
Route::put('user_has_customers/{??}',[UserHasCustomerController::class,'update']);
Route::delete('user_has_customers/{??}',[UserHasCustomerController::class,'delete']);
*/

/*
//alternatives_units
Route::get('alternatives_units',[AlternativeUnitController::class,'index']);
Route::get('alternatives_units/{??}',[AlternativeUnitController::class,'show']);
Route::post('alternatives_units',[AlternativeUnitController::class,'store']);
Route::put('alternatives_units/{??}',[AlternativeUnitController::class,'update']);
Route::delete('alternatives_units/{??}',[AlternativeUnitController::class,'delete']);
*/