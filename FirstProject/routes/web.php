<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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
Route::get('/register',[CrudController::class,'first']);
Route::Post('/register',[CrudController::class,'second']);
Route::get('/view',[CrudController::class,'show']);
Route::get('/update{id}',[CrudController::class,'update']);
Route::Post('/update{id}',[CrudController::class,'fourth']);
route::get('/delete/{id}',[CrudController::class,'delete']);