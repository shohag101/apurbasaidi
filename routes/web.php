<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserregController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('login');
});
Route::get('userreg',[UserregController::class,'index']);
Route::resource('user',UserregController::class);
Route::resource('login',LoginController::class);
