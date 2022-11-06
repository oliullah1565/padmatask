<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
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


Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get("user",function(Request $request){ return $request->user(); });
    Route::get("logout",[UserController::class,'logout']);

    
});
Route::get("product",[ProductController::class,'index']);
Route::post("product",[ProductController::class,'store']);
Route::post("productdetails/{id}",[ProductController::class,'show']);

Route::post("login",[UserController::class,'login']);
Route::post("register",[UserController::class,'register']);

Route::get("check",function(){ return 'Oliullah'; });

//Customer Routes Start
Route::get("customerlist",[CustomerController::class,'index']);
Route::post("customerstore",[CustomerController::class,'store']);
Route::get("customeredit/{id}",[CustomerController::class,'edit']);
Route::post("customerupdate/{id}",[CustomerController::class,'update']);
Route::get("customerdelete/{id}",[CustomerController::class,'destroy']);

//Customer Routes Close

//Bill Routes Start

//Customer Routes Start
Route::get("billlist",[BillController::class,'index']);
Route::post("billstore",[BillController::class,'store']);
Route::get("billedit/{id}",[BillController::class,'edit']);
Route::post("billupdate/{id}",[BillController::class,'update']);
Route::get("billdelete/{id}",[BillController::class,'destroy']);

Route::get("billmail/{id}",[BillController::class,'show']);

//Bill Routes Close