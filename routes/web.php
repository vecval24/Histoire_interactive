<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::prefix('api/v1/')->group(function () {
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