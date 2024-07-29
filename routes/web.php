<?php

use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerControlller;
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


Route::get('officers',[OfficerControlller::class,'index'])->name('officers.index');
Route::get('officers/delete/{id}',[OfficerControlller::class,'delete'])->name('officers.delete');
Route::get('officers/create',[OfficerControlller::class,'create'])->name('officers.create');
Route::post('officers/store',[OfficerControlller::class,'store'])->name('officers.store');

