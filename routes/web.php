<?php

use Livewire\Volt\Volt;

Volt::route('/', 'auth.login');

// Route::get('/', Welcome::class)
//     ->middleware(['auth', 'verified'])
//     ->name('home');

// // Authentication Routes

// Route::get('login', Login::class)
//     ->middleware('guest')
//     ->name('login');

// Route::get('register', Register::class)
//     ->middleware('guest')
//     ->name('register');