<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

route::post('user/store',[UserController::class,'store']);
Route::POST('instructor/store',[UserController::class,'instructor']);
Route::GET('instructor/show',[UserController::class,'showinstructor']);
Route::GET('instructor/delete/{id}',[UserController::class,'delete']);
Route::PUT('instructor/update/{id}',[UserController::class,'updateinstructor']);
Route::POST('article/store',[UserController::class,'article']);
Route::PUT('article/update/{id}',[UserController::class,'updatearticle']);
Route::GET('article/delete/{id}',[UserController::class,'deletearticle']);



