<?php

use App\Http\Controllers\ScrumboardController;
use App\Models\Scrumboard;
use Illuminate\Support\Facades\Route;

Route::post('/create', [ScrumboardController::class, 'store']);

Route::get('/boards', [ScrumboardController::class, 'index']);

Route::get('/boards/{id}', [ScrumboardController::class, 'show']);