<?php

use App\Http\Controllers\Appointment\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/appointment/book', [AppointmentController::class, 'create'])->name('appointment.book');
    Route::post('/appointment/book', [AppointmentController::class, 'store'])->name('appointment.save');
    Route::get('/appointment/success', [AppointmentController::class, 'success'])->name('appointment.success');
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('user.dashboard');
    Route::delete('/logout', [AppointmentController::class, 'destroy'])->name('user.destroy');

});


require __DIR__.'/auth.php';