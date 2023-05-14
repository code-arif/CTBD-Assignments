<?php

use App\Http\Controllers\taskManageController;
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

Route::get('/', [TaskManageController::class,'index'])->name('home');

//task create route
Route::get('task/create' , [TaskManageController::class,'create'])->name('task.create.show');
Route::post('task/create' , [TaskManageController::class,'store'])->name('task.create');

//task update route
Route::get('task/edit/{id}' , [TaskManageController::class,'show'])->name('task.show');
Route::post('task/edit/{id}' , [TaskManageController::class,'update'])->name('task.update');

//task delete route
Route::get('task/delete/{id}' , [TaskManageController::class,'delete'])->name('task.delete');

//task status update route
Route::get('task/update/{id}/{status}' , [TaskManageController::class,'updateStatus'])->name('task.updateStatus');
