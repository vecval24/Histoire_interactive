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
    Route::get('/test', function () {
        return response()->json(['message' => 'Hello, World from api!']);
    });
    Route::delete('/test', function () {
        return response()->json(['message' => 'Deleting']);
    });

    Route::resource('stories', StoryController::class);
    Route::resource('chapters', ChapterController::class);
    Route::resource('choices', ChoiceController::class);
});