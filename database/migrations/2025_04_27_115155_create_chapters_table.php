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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id(); // Clé primaire, ID du chapitre
            $table->unsignedBigInteger('story_id'); //id de la story
            $table->string('title'); // Titre du chapitre
            $table->text('content'); // Contenu du chapitre
            $table->timestamps(); // timestamps pour created_at et updated_at

            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade'); //contrainte
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
