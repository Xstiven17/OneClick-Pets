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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->integer('Cantidad_inicial');
            $table->integer('Cantidad_final');
            $table->integer('Cantidad_total');
            $table->integer('Cantidad_entradas');
            $table->integer('Valor_venta');
            $table->integer('Precio_unit_entradas');
            $table->string('Total_entradas');
            $table->integer('Precio_total_entradas');
            $table->integer('Cantidad_salidas');
            $table->integer('Precio_unit_salidas');
            $table->string('Total_salidas');
            $table->float('Precio_total_salidas',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
