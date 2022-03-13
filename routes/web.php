<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::get('admin/{any}', [AdminController::class, 'index'])->name('admin')->middleware('role:admin');

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Route::get('home', function () {
//     return redirect('/dashboard');
// });

// Route::get('/{vue_capture?}', function () {
//     return view('home');
// })->where('vue_capture', '[\/\w\.-]*')->middleware('auth');
