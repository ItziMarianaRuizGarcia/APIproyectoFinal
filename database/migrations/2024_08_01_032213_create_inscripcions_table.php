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
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();
            $table->integer('numeroControl');
            $table->unsignedBigInteger('id_actividad');
            $table->timestamps();
            $table->foreign('numeroControl')->references('numeroControl')->on('alumnos')->onDelete('cascade');  // Add 'onDelete' if needed
            $table->foreign('id_actividad')->references('id')->on('actividads')->onDelete('cascade');  // Add 'onDelete' if needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcions');
    }
};
