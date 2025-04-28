<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ends', function (Blueprint $table) {
            $table->id(); // Identifiant de la fin
            $table->foreignId('story_id')->constrained()->onDelete('cascade'); // Référence à l'histoire
            $table->string('title'); // Titre de la fin (par exemple "Fin heureuse", "Fin triste")
            $table->text('content'); // Contenu de la fin de l'histoire
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ends');
    }
}
