<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/signup',[SignupController::class,'create']);

Route::post('/signup',[SignupController::class,'store']);
Route::get('/list',[SignupController::class,'index'])->name('list');
Route::get('/edit/{id}',[SignupController::class,'edit']);
Route::put('/edit/{id}',[SignupController::class,'update']);
Route::get('/delete/{id}',[SignupController::class,'destroy']);


require __DIR__.'/auth.php';
