<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/wisata', [PublicController::class, 'wisata'])->name('wisata');
Route::get('/wisata/{wisata:slug}', [PublicController::class, 'show'])->name('wisata.show');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/guide', [PublicController::class, 'guide'])->name('guide');
Route::get('/terms', [PublicController::class, 'terms'])->name('terms');
Route::get('/privacy', [PublicController::class, 'privacy'])->name('privacy');

// Verification Route (Public)
Route::get('/verify/ticket/{ticket_code}', [\App\Http\Controllers\TicketVerificationController::class, 'verify'])->name('ticket.verify');

// Auth Routes
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.store');

Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register.store');

Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Forgot Password Routes
Route::get('/forgot-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'reset'])->name('password.update');

// Admin Panel Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('wisata', \App\Http\Controllers\Admin\WisataController::class);
});

// User Panel Routes
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');

    // Booking Flow
    Route::get('/book/{wisata:slug}', [\App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
    Route::get('/book/{wisata:slug}/check-availability', [\App\Http\Controllers\BookingController::class, 'checkAvailability'])->name('booking.check-availability');
    Route::post('/book/{wisata:slug}/checkout', [\App\Http\Controllers\BookingController::class, 'checkout'])->name('booking.checkout');
    Route::post('/book/{wisata:slug}/store', [\App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');
    Route::get('/book/success/{order}', [\App\Http\Controllers\BookingController::class, 'success'])->name('booking.success');

    // My Tickets
    Route::get('/tickets', [\App\Http\Controllers\User\TicketController::class, 'index'])->name('tickets.index');
});
