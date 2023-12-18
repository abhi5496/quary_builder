<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HathiController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HathiController::class,'showUsers']);
Route::get('/user/{id}',[HathiController::class,'singleUser'])->name("view.user");