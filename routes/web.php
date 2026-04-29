<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/about', [PortfolioController::class, 'about'])->name('about');

Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');   // ← New Skills Route

Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// Contact Form Submission
Route::post('/contact', [PortfolioController::class, 'sendMessage'])->name('contact.send');
// ==================== PROJECTS ROUTES ====================
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])
     ->name('projects.index');

Route::get('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'show'])
     ->name('projects.show');