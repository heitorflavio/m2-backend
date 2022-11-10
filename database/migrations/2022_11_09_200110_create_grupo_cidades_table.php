<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo__cidades', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo_id');
            $table->string('nome');
            $table->foreignId('cidade_id')->constrained('cidades');
            $table->timestamps();
            $table->unique('cidade_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo__cidades');
    }
}
