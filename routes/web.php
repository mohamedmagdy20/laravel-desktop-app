<?php

use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NonOfficerController;
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
Route::get('officers/import/view',[OfficerControlller::class,'importView'])->name('officers.import.view');
Route::post('officers/import',[OfficerControlller::class,'importExcel'])->name('officers.import');
Route::get('officers/edit/{id}',[OfficerControlller::class,'edit'])->name('officers.edit');
Route::post('officers/update/{id}',[OfficerControlller::class,'update'])->name('officers.update');



Route::get('non',[NonOfficerController::class,'index'])->name('non.index');
Route::get('non/delete/{id}',[NonOfficerController::class,'delete'])->name('non.delete');
Route::get('non/create',[NonOfficerController::class,'create'])->name('non.create');
Route::post('non/store',[NonOfficerController::class,'store'])->name('non.store');
Route::get('non/import/view',[NonOfficerController::class,'importView'])->name('non.import.view');
Route::get('non/edit/{id}',[NonOfficerController::class,'edit'])->name('non.edit');
Route::post('non/update/{id}',[NonOfficerController::class,'update'])->name('non.update');
