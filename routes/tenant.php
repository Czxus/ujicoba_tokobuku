<?php
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function (){
    return 'dashboard Toko Buku / penjual';
})->name('dashboard');

