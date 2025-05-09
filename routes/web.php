<?php

use App\Http\Controllers\API\V1\ChoiceController;
use App\Http\Controllers\API\V1\ChapterController;
use App\Http\Controllers\API\V1\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::prefix('api/v1/')->group(function () {
  Route::get('stories', [StoryController::class, 'index']);
  Route::get('chapters/{id}', [ChapterController::class, 'show']);

    Route::get('/test', function () {
        return response()->json(['message' => 'Hello, World from api!']);
    });
    Route::delete('/test', function () {
        return response()->json(['message' => 'Deleting']);
    });

    Route::resource('stories', App\Http\Controllers\API\V1\StoryController::class);
    Route::resource('chapters', App\Http\Controllers\API\V1\ChapterController::class);
    Route::resource('choices', App\Http\Controllers\API\V1\ChoiceController::class);
});

// Redirection vers la vue Vue.js pour toutes les autres routes
Route::get('/{any}', function () {
    return view('index'); 
})->where('any', '.*'); 
