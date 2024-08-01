<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dia');
            $table->string('hora');
            $table->unsignedBigInteger('id_docente');
            $table->timestamps();
            $table->foreign('id_docente')->references('id')->on('docentes')->onDelete('cascade');  // Add 'onDelete' if needed
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('actividads');
    }
};
