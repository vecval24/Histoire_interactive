<?php
// app/Http/Controllers/ChapterController.php
namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function fetchAllChapters()
    {
        $chapters = Chapter::all();
        return response()->json($chapters);
    }

    public function show($id) {
        return Chapter::findOrFail($id);
    }
    
}
