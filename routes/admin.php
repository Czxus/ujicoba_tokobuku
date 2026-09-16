<?php
use Illuminate\Support\Facades\Route;


Route::get('dashboard', function(){
    return 'dashboard Admin Utama Platform';
})->name('dashboard');