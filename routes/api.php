<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('api/v1')->group(function () {
    Route::apiResource('ends', App\Http\Controllers\EndController::class);
    Route::apiResource('chapters', App\Http\Controllers\ChapterController::class);
    Route::apiResource('choices', App\Http\Controllers\ChoiceController::class);
});

