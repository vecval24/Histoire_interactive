<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Story;
use App\Models\Chapter;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $progress = $request->user()->with('story')->get();
        return response()->json($progress);
    }

    public function show(Request $request, Story $story)
    {
        $progress = $request->user()
            ->where('story_id', $story->id)
            ->with('chapter')
            ->first();

        if (!$progress) {
            return response()->json(['message' => 'No progress found for this story'], 404);
        }

        return response()->json($progress);
    }

    public function store(Request $request)
    {
        $request->validate([
            'story_id' => 'required|exists:stories,id',
            'chapter_id' => 'required|exists:chapters,id',
        ]);

        // Vérifier que le chapitre appartient bien à l'histoire
        $chapter = Chapter::findOrFail($request->chapter_id);
        if ($chapter->story_id != $request->story_id) {
            return response()->json(['message' => 'Chapter does not belong to this story'], 400);
        }

        // Créer ou mettre à jour la progression
        $progress = User::updateOrCreate(
            [
                'user_id' => $request->user()->id,
                'story_id' => $request->story_id,
            ],
            [
                'chapter_id' => $request->chapter_id,
            ]
        );

        return response()->json($progress, 201);
    }

    public function destroy(Request $request, Story $story)
    {
        $deleted = $request->user()
            ->where('story_id', $story->id)
            ->delete();

        if (!$deleted) {
            return response()->json(['message' => 'No progress found for this story'], 404);
        }

        return response()->json(null, 204);
    }
}