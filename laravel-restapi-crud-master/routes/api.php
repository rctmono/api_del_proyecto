<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

Route::get('/usuarios', [studentController::class, 'index']);

Route::get('/usuarios/{id}', [studentController::class, 'show']);

Route::post('/usuarios', [studentController::class, 'store']);

Route::put('/usuarios/{id}', [studentController::class, 'update']);

Route::patch('/usuarios/{id}', [studentController::class, 'updatePartial']);

Route::delete('/usuarios/{id}', [studentController::class, 'destroy']);
