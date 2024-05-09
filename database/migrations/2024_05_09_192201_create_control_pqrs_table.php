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
        Schema::create('control_pqrs', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_pqrs');
            $table->tinyInteger('Aprobado')->default(0);
            $table->tinyInteger('No_Aprobado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_pqrs');
    }
};
