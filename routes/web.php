<?php

use Livewire\Volt\Volt;

// Volt::route('/', 'auth.login');

Volt::route('/login', 'auth.login')->name('login');

// Route::middleware('auth')->group(function () {
//     Volt::route('/', 'index');
//     Volt::route('/users', 'users.index');
//     Volt::route('/users/create', 'users.create');
//     Volt::route('/users/{user}/edit', 'users.edit');
// });
 
// Define the logout
// Route::get('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();
 
//     return redirect('/');
// });

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