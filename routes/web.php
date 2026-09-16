<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// route halaman depan publik
Route::get('/', function () {
    return view('welcome');
});

// kelompok route internal wajib login
Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Route khusus Tenant (Penjual Buku)
    Route::prefix('tenant/{tenant:slug}')
        ->scopeBindings()
        ->name('tenant.')
        ->group(base_path('routes/tenant.php'));

    // Route khusus Admin Utama
    Route::prefix('admin')
        ->name('admin.')
        ->group(base_path('routes/admin.php'));
});
// bawaan breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('toko/{canteen:slug}')
->name('customer.')
->group(base_path('routes/customer.php'));

require __DIR__.'/auth.php';
