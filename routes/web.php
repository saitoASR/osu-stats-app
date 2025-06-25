<?php

use App\Http\Controllers\OsuController;

Route::get('/', [OsuController::class, 'index']);
Route::post('/search', [OsuController::class, 'search'])->name('osu.search');

