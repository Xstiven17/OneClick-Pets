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
        Schema::create('promociones_descuentos', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo_promocion',45);
            $table->string('Tipo_descuento',45);
            $table->string('Valor_descuento',45);
            $table->dateTime('Fecha_inicial');
            $table->dateTime('Fecha_finalizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones_descuentos');
    }
};

