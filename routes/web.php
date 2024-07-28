<?php

use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index'])->name('index');

Route::get('commitment',[CommitmentController::class,'index'])->name('commitment');
Route::get('commitment/create',[CommitmentController::class,'create'])->name('create');
Route::get('commitment/edit/{id}',[CommitmentController::class,'edit'])->name('edit');
Route::get('commitment/delete/{id}',[CommitmentController::class,'delete'])->name('delete');
Route::post('commitment/store',[CommitmentController::class,'store'])->name('store');
Route::post('commitment/update/{id}',[CommitmentController::class,'update'])->name('update');
