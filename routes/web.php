<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShrineController;
use App\Http\Controllers\RedirectController;

// Редірект на ShrineChoose
Route::redirect('/', '/ShrineChoose');

// Маршрути ShrineController
Route::get('/ShrineChoose', [ShrineController::class, 'choose'])->name('ShrineChoose');
Route::get('/ShrineBernkastel', [ShrineController::class, 'bernkastel'])->name('ShrineBernkastel');
Route::get('/ShrineLambdadelta', [ShrineController::class, 'lambdadelta'])->name('ShrineLambdadelta');
Route::get('/ShrineBeatrice', [ShrineController::class, 'beatrice'])->name('ShrineBeatrice');
Route::get('/ShrineVirgilia', [ShrineController::class, 'virgilia'])->name('ShrineVirgilia');

// Маршрут з параметром
Route::get('/Shrine/{name}', [ShrineController::class, 'withParameter'])->name('ShrineWithParameter');

// Single Action Controller
Route::get('/redirect', RedirectController::class)->name('redirectToShrineChoose');
