<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\StudentController;
Route::get('/student',[StudentController::class,'index']);
