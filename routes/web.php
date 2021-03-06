<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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



//register
Route::get('/',[userController::class,'index']);
Route::post('/register',[userController::class,'store']);

//login
Route::get('/login', [userController::class, 'loginview']);
Route::post('/login', [userController::class, 'authenticate']);
