<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoicesTable extends Migration
{
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chapter_id'); // Référence au chapitre
            $table->string('text');  // Le texte du choix
            $table->unsignedBigInteger('next_chapter_id'); // Référence au chapitre suivant
            $table->timestamps();

            // Ajouter la contrainte de clé étrangère
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
            $table->foreign('next_chapter_id')->references('id')->on('chapters')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('choices');
    }
}
