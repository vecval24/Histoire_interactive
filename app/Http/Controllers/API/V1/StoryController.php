<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;


class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stories = Story::with('chapters')->get()->map(function ($story) {
            $firstChapter = $story->chapters->sortBy('id')->first();
    
            return [
                'id' => $story->id,
                'title' => $story->title,
                'description' => $story->description,
                'created_at' => $story->created_at,
                'updated_at' => $story->updated_at,
                'first_chapter_id' => $firstChapter?->id, // null-safe in case no chapter
            ];
        // $stories = Story::all();

        // return response()->json($stories);
        });
        return response()->json($stories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($story);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(StoryRequest $request, $id)
   {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
