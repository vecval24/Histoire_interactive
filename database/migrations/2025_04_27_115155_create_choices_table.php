<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id(); // Clé primaire, ID du choix
            $table->foreignId('chapter_id')->constrained()->onDelete('cascade'); // Référence au chapitre actuel
            $table->string('text'); // Texte du choix
            $table->foreignId('next_chapter_id')->constrained('chapters')->onDelete('cascade'); // Référence au chapitre suivant
            $table->timestamps(); // timestamps pour created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
