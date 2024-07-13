<?php

use App\Http\Controllers\CommitmentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[CommitmentController::class,'index'])->name('index');
Route::get('create',[CommitmentController::class,'create'])->name('create');
Route::get('edit/{id}',[CommitmentController::class,'edit'])->name('edit');
Route::get('delete/{id}',[CommitmentController::class,'delete'])->name('delete');
Route::post('store',[CommitmentController::class,'store'])->name('store');
Route::post('update/{id}',[CommitmentController::class,'update'])->name('update');
