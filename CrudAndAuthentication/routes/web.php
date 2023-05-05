<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudAndAuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[CrudAndAuthenticationController::class,'home']);
Route::get('/show',[CrudAndAuthenticationController::class,'view']);
Route::get('/delete/{id}',[CrudAndAuthenticationController::class,'delete']);
Route::get('/update/{id}',[CrudAndAuthenticationController::class,'check']);
Route::get('/session-check',[CrudAndAuthenticationController::class,'new']);
Route::get('/trash',[CrudAndAuthenticationController::class,'showTrash']);
Route::get('/restore/{id}',[CrudAndAuthenticationController::class,'restore']);
Route::get('/force-delete/{id}',[CrudAndAuthenticationController::class,'forceDelete']);
Route::Post('/',[CrudAndAuthenticationController::class,'register']);
Route::Post('/update/{id}',[CrudAndAuthenticationController::class,'update']);
