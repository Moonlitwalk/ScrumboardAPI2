<?php

use App\Http\Controllers\ScrumboardController;
use App\Http\Controllers\TicketController;
use App\Models\Scrumboard;
use Illuminate\Support\Facades\Route;

//boards
Route::post('/create', [ScrumboardController::class, 'store']);
Route::get('/boards', [ScrumboardController::class, 'index']);
Route::get('/boards/{id}', [ScrumboardController::class, 'show']);
Route::put('/boards/{scrumboard}', [ScrumboardController::class, 'update']);
Route::delete('/boards/{scrumboard}', [ScrumboardController::class, 'destroy']);
//boards nested
Route::get('boards/{scrumboard}/tickets/{ticket}', [ScrumboardController::class, 'showForBoard']);

//tickets
Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/tickets/{id}', [TicketController::class, 'show']);
Route::post('/new_ticket', [TicketController::class, 'store']);
Route::put('/tickets/{id}', [TicketController::class, 'update']);
Route::delete('/tickets/{id}', [TicketController::class, 'destroy']);


