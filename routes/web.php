<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/a-propos', fn() => view('pages.about'))->name('about');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');

Route::get('/programmes', [App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
Route::get('/programmes/{slug}', [App\Http\Controllers\ProgramController::class, 'show'])->name('program.show');

Route::get('/evenements', [App\Http\Controllers\EventController::class, 'index'])->name('events');
Route::get('/evenements/{slug}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');

Route::get('/actualites', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/actualites/{slug}', [App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

Route::get('/equipe', [App\Http\Controllers\TeamController::class, 'index'])->name('team');
Route::get('/equipe/{slug}', [App\Http\Controllers\TeamController::class, 'show'])->name('team.show');

// ================================
// Contact — envoi formulaire
// ================================
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/envoyer', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
