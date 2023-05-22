<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainulController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
//ans num 1
Route::post('/savename', [UserController::class, 'saveName']);
//ans num 2
Route::post('/useragent', [UserController::class, 'getUserAgent']);
//ans num 3
Route::get('/getpage', [UserController::class, 'getPage']);
//ans num 4
Route::post('/jsonresponse', [UserController::class, 'jsonResponse']);
//ans num 5
Route::post('/uploadavatar', [UserController::class, 'uploadAvatar']);
//ans num 6
Route::post('/getremembertoken', [UserController::class, 'getRememberToken']);
//ans num 7
Route::post('/submit', [UserController::class, 'getEmail']);
//Route::post('/email', [UserController::class, 'getEmail']);
Route::get('/', function () { return view('welcome');});
