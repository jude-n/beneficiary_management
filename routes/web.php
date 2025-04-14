<?php

use App\Http\Controllers\BeneficiaryController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/beneficiaries', [BeneficiaryController::class, 'index'])->name('beneficiaries.index');
Route::get('/beneficiaries/active/cache', [BeneficiaryController::class, 'getActiveBeneficiariesWithCache'])->name('beneficiaries.active.cache');
Route::get('/beneficiaries/active/no-cache', [BeneficiaryController::class, 'getActiveBeneficiariesWithoutCache'])->name('beneficiaries.active.without-cache');
Route::put('/beneficiaries/update/{id}', [BeneficiaryController::class, 'update'])->name('beneficiaries.update');
