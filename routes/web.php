<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProfileController;

// Home Route
Route::get('/', [RoomTypeController::class, 'homepage'])->name('home');

// Static Pages
Route::view('/aboutus', 'pages.aboutus')->name('about');
Route::view('/offers', 'pages.offers')->name('offers');
Route::view('/contacts', 'pages.contacts')->name('contacts');

// Room Type Route
Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route::get('/rooms/{id}', [RoomsController::class, 'show'])->name('roomdetails');
Route::post('/rooms/{id}/check-availability', [RoomTypeController::class, 'checkAvailability'])->name('roomdetails.checkAvailability');

// Booking Routes
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Contacts Routes
Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');

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
