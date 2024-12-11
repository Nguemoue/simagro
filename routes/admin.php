<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin2')->as('admin.')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\AdminHomeController::class)->name('home');

    Route::view('about', 'about')->name('about');
    Route::view('contact', 'contact')->name('contact');
    Route::view('services', 'services')->name('services');
    Route::view('testimonial', 'testimonial')->name('testimonial');
    Route::view('team', 'team')->name('teams');
    Route::view('projects', 'projects')->name('projects');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});

require __DIR__ . '/auth.php';
