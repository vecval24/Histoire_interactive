<?php

use App\Http\Controllers\ChapterController;

Route::get('chapters/{id}', [ChapterController::class, 'show']);
