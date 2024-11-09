<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGravidadesTable extends Migration
{
    public function up()
    {
        Schema::create('gravidades', function (Blueprint $table) {
            $table->id();  
            $table->string('nome'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('gravidades');  
    }
}
