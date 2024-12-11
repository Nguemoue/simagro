<?php

use App\Http\Controllers\Backend\QuoteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('about', \App\Http\Controllers\Frontend\AboutController::class)->name('about');
Route::view('contact', 'contact')->name('contact');
Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::get('services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get("blogs",[BlogController::class,'index'])->name('blogs.index');
Route::get("blogs/{blog}",[BlogController::class,'show'])->name('blogs.show');
Route::view('testimonial', 'testimonial')->name('testimonial');
Route::view('team', 'team')->name('teams');
Route::get('projects', [ProjectController::class,'index'])->name('projects');
Route::get('projects/{project}', [ProjectController::class,'show'])->name('projects.show');
Route::post('quote',[QuoteController::class,'store'])->name('quote');
Route::view('/dashboard','dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::post("newsletters",[NewsletterController::class,'store'])->name('newsletters');
Route::post("contact-us",[\App\Http\Controllers\ContactController::class,'store'])->name('contact.store');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//require __DIR__.'/auth.php';
