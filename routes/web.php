<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

foreach (['about', 'programs', 'activities', 'teachers', 'news', 'stories', 'events', 'event-details', 'gallery', 'rankings', 'contact'] as $page) {
    Route::get($page, [PageController::class, 'show'])->defaults('page', $page)->name($page);
}

Route::post('contact', [ContactController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('contact.store');

Route::redirect('apply', '/contact')->name('apply');
