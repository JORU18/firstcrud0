<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {

 return view('Welcome'); 
  
});

Route::resource('post',App\Http\Controllers\Dashboard\PostController::class);

// Route::get('post', [App\Http\Controllers\Dashboard\PostController::class,'index']);
// Route::get('post/{post}', [App\Http\Controllers\Dashboard\PostController::class,'show']);
// Route::get('post/create', [App\Http\Controllers\Dashboard\PostController::class,'create']);
// Route::get('post/{post}/edit', [App\Http\Controllers\Dashboard\PostController::class,'edit']);


// Route::post('post', [App\Http\Controllers\Dashboard\PostController::class,'store']);
// Route::post('post/{post}', [App\Http\Controllers\Dashboard\PostController::class,'update']);

// Route::delete('post/{post}', [App\Http\Controllers\Dashboard\PostController::class,'delete']);