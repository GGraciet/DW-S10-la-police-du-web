<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ReservationController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
Route::get('/countries/create', [CountryController::class, 'create'])->name('countries.create');
Route::post('/countries', [CountryController::class, 'store'])->name('countries.store');
Route::get('/countries/{id}', [CountryController::class, 'show'])->name('countries.show');
Route::get('/countries/{id}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/{id}', [CountryController::class, 'update'])->name('countries.update');
Route::delete('/countries/{id}', [CountryController::class, 'destroy'])->name('countries.destroy');
