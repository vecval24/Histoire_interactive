<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndsTable extends Migration
{
    public function up()
    {
        Schema::create('ends', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Titre de la fin
            $table->text('content');  // Contenu de la fin
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ends');
    }
}
