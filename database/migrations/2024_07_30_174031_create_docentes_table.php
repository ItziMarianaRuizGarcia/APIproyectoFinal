<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->unsignedBigInteger('id_departamento');
            $table->string('correo');
            $table->string('contraseña');
            $table->timestamps();
            $table->foreign('id_departamento')->references('id')->on('departamentos')->onDelete('cascade');  // Add 'onDelete' if needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
