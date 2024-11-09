<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProntuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('sexo')->nullable();
            $table->string('cpf')->nullable();
            $table->text('sintomas')->nullable();
            $table->text('procedimentos')->nullable();
            $table->text('medicacoes')->nullable();
            $table->text('diagnostico_previo')->nullable();
            $table->string('gravidade')->nullable();
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
        Schema::dropIfExists('prontuarios');
    }
}
