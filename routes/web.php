<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

Route::get('/' , [StudentController::class , 'index'])->name('index');
Route::post('/' , [StudentController::class , 'create'])->name('insert');

Route::get('/edit/{id}' , [StudentController::class , 'edit'])->name('edit');
Route::put('/edit/{id}' , [StudentController::class , 'update'])->name('update');

Route::get('/del/{id}' , [StudentController::class , 'destroy'])->name('delete');