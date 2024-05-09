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
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre1');
            $table->string('Nombre2');
            $table->string('Apellido1');
            $table->string('Apellido2');
            $table->string('Direccion');
            $table->integer('Identificacion');
            $table->string('Correo')->unique();
            $table->string('Telefono');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terceros');
    }
};

