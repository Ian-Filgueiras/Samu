<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterGravidadeInProntuariosTable extends Migration
{
    public function up()
    {
        Schema::table('prontuarios', function (Blueprint $table) {
            
            $table->dropColumn('gravidade');

            
            $table->unsignedBigInteger('gravidade_id')->nullable();

           
            $table->foreign('gravidade_id')->references('id')->on('gravidades')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('prontuarios', function (Blueprint $table) {
            
            $table->dropForeign(['gravidade_id']);
            $table->dropColumn('gravidade_id');

            
            $table->string('gravidade')->nullable();
        });
    }
}