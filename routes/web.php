<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ChoiceController;

// Définir les routes pour l'API
Route::prefix('api/v1')->group(function () {
    Route::get('/chapters/{id}', [ChapterController::class, 'show']);
    Route::get('/choices', [ChoiceController::class, 'index']);
    
    Route::get('/test', function () {
        return response()->json(['message' => 'Hello, World from api!']);
    });

    Route::delete('/test', function () {
        return response()->json(['message' => 'Deleting']);
    });
});

// Routes Vue.js (SPA)
Route::get('/{any?}', function () {
    return view('index');
})->where('any', '^(?!api|login|register).*')->name('spa');
