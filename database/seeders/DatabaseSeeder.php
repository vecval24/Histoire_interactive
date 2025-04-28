<?php

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use App\Models\Choice;
use App\Models\End;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Créer le chapitre 1
        $chapter1 = Chapter::create([
            'title' => 'Chapitre 1 : Le début',
            'content' => 'Vous vous réveillez dans une forêt sombre...',
        ]);

        // Créer le chapitre 2
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => 'Vous commencez à explorer la forêt...',
        ]);

        // Créer les choix pour le chapitre 1
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Explorer la forêt',
            'next_chapter_id' => $chapter2->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Rester sur place',
            'next_chapter_id' => $chapter1->id, // Boucle sur le même chapitre
        ]);

        // Créer des fins
        End::create([
            'title' => 'Fin Heureuse',
            'content' => 'Vous avez trouvé la sortie de la forêt, sain et sauf.',
        ]);

        End::create([
            'title' => 'Fin Tragique',
            'content' => 'Vous avez été perdu dans la forêt...',
        ]);
    }
}
