<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

Route::get('/' , [StudentController::class , 'index'])->name('index');
