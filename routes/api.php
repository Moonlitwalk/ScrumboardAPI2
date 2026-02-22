<?php

use App\Http\Controllers\ScrumboardController;
use App\Models\Scrumboard;
use Illuminate\Support\Facades\Route;

Route::post('/create', [ScrumboardController::class, 'store']);

Route::get('/boards', [ScrumboardController::class, 'index']);

Route::get('/boards/{id}', [ScrumboardController::class, 'show']);

Route::put('/boards/{scrumboard}', [ScrumboardController::class, 'update']);

Route::delete('/boards/{scrumboard}', [ScrumboardController::class, 'destroy']);