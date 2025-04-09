<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\FlightBookingCreate;
use App\Livewire\FlightBookingEdit;
use App\Livewire\FlightBookingPayment;
use App\Livewire\FlightBookingView;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/flight-booking', FlightBookingCreate::class)->name('flights.create');
Route::get('/flight-booking/edit/{id}', FlightBookingEdit::class)->name('flights.edit')->middleware('auth');
Route::get('/flight-booking/payment/{id}', FlightBookingPayment::class)->name('flights.payment')->middleware('auth');
Route::get('/flight-booking/view', FlightBookingView::class)->name('flights.view')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
