<?php
// app/Http/Controllers/ChapterController.php
namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function show($id)
    {
        // Récupérer le chapitre avec les choix associés
        $chapter = Chapter::with('choices')->findOrFail($id);

        return response()->json($chapter);
    }
}
