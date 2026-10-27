<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/admission-form-pdf/{id}', [App\Http\Controllers\AdmissionController::class, 'pdf'])->name('admission-form.pdf');

Route::middleware('auth')->group(function () {
    Route::get('/teacher-id-card/download', [App\Http\Controllers\TeacherController::class, 'download'])->name('teacher-id-card.download');
    Route::get('/student-id-card/download', [App\Http\Controllers\StudentController::class, 'download'])->name('student-id-card.download');

    // admit card
    Route::get('/generate-admit-cards/{exam}', [App\Http\Controllers\AdmitCardController::class, 'index'])->name('generate-admit-cards');

    // Payment

    Route::get('/payment/{fee}/{id}', [App\Http\Controllers\CheckoutController::class, 'checkout'])
        ->name('payment.checkout');


    Route::get('/payment/success', [App\Http\Controllers\CheckoutController::class, 'success'])->name('payment.success');

    Route::get('/payment/cancel', [App\Http\Controllers\CheckoutController::class, 'cancel'])->name('payment.cancel');
});
