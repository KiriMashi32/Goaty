<?php

use App\Http\Controllers\GoatsController;
use Illuminate\Support\Facades\Route;
use App\Models\Goat;


Route::get('/goats', [GoatsController::class, 'index']);
Route::get('/goats/create', [GoatsController::class, 'create']);
Route::get('/goats/{id}/edit', [GoatsController::class, 'edit']);
Route::patch('/goats/{id}', [GoatsController::class, 'update']);
Route::delete('/goats/{id}', [GoatsController::class, 'destroy']);
Route::get('/goats/{id}', [GoatsController::class, 'show']);
Route::post('/goats', [GoatsController::class, 'store']);

Route::get('/', function () {
    return redirect('/goats');
});