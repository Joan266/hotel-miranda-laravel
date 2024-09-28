<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProfileController;

// Home Route
Route::get('/', [RoomTypeController::class, 'homepage'])->name('home');

// Aboutus Routes
Route::view('/aboutus', 'pages.aboutus')->name('about');

// Contact Routes
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactsController::class, 'index'])->name('contact'); 
    Route::post('/store', [ContactsController::class, 'store'])->name('contact.store'); 
});

// Offers Routes
Route::get('/offers', [RoomsController::class, 'offers'])->name('offers');

// Room Type Route
Route::prefix('rooms')->group(function () {
    Route::get('/', [RoomsController::class, 'index'])->name('rooms'); 
    Route::get('/available', [RoomsController::class, 'availableRooms'])->name('availableRooms');
    Route::get('/{id}', [RoomsController::class, 'show'])->name('roomdetails');
    Route::get('/{id}/check-availability', [BookingsController::class, 'checkAvailability'])->name('checkAvailability');
    Route::post('/{id}/reserve', [BookingsController::class, 'store'])->name('roomdetails.reserve');
});

// Booking Routes
Route::post('/booking', [BookingsController::class, 'store'])->name('bookings.store');

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    
    // Profile Routes
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

// Authentication Routes (Login, Registration, etc.)
require __DIR__.'/auth.php';
