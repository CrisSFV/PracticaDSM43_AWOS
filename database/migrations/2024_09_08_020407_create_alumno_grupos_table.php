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
        Schema::create('alumno_grupos', function (Blueprint $table) {
            $table->bigIncrements('id_alumno_grupo'); 
            $table->unsignedBigInteger('id_alumno');  
            $table->unsignedBigInteger('id_grupo');   
            $table->string('activo');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_grupos');
    }
};
