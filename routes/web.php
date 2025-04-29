<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChapterController;


//définir les routes pour l'api
Route::prefix('api/v1')->group(function () {
  Route::get('/chapter/all', [ChapterController::class, 'fetchAllChapters']);
  Route::get('/test', function () {
    return response()->json(['message' => 'Hello, World from api!']);
  });
  Route::delete('/test', function () {
    return response()->json(['message' => 'Deleting']);
  });
});

// Vue routes
Route::get('/{any?}', function () {
  return view('index');
})->where('any', '^(?!api|login|register).*')->name('spa');
