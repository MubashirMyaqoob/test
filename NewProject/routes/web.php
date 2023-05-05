<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ImageController;
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

Route::get('/', function () {
    return view('welcome');
});
route::get('/register',[CustomerController::class,'first']);
route::get('/view',[CustomerController::class,'third']);
route::get('/update/{id}',[CustomerController::class,'fourth']);
route::get('/trash/{id}',[CustomerController::class,'sixth']);
Route::get('/showtrash',[CustomerController::class,'showTrash']);
Route::get('/Delete/{id}',[CustomerController::class,'delete']);
Route::get('/Restore/{id}',[CustomerController::class,'restore']);
route::Post('/register',[CustomerController::class,'second']);
route::Post('/update{id}',[CustomerController::class,'fifth']);
route::get('/imageUpload',[ImageController::class,'image']);