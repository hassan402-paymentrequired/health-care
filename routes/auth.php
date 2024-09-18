<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Profile\UserPersonalInfoController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/', [RegisterUserController::class, 'index'])->name('login');
    Route::post('/', [RegisterUserController::class, 'store'])->name('register');
});

Route::middleware('auth')->group(function(){
    Route::post('/user/info', [UserPersonalInfoController::class, 'store'])->name('profile.personalInfo.save');
    Route::get('/user/personal-info', [UserPersonalInfoController::class, 'create'])->name('profile.personalInfo');

});