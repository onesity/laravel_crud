<?php

use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/signup',[SignupController::class,'create']);
Route::post('/signup',[SignupController::class,'store']);
Route::get('/list',[SignupController::class,'index'])->name('list');
Route::get('/edit/{id}',[SignupController::class,'edit']);
Route::put('/edit/{id}',[SignupController::class,'update']);
Route::get('/delete/{id}',[SignupController::class,'destroy']);
