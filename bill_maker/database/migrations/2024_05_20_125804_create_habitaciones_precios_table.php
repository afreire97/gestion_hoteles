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
        Schema::create('habitaciones_precios', function (Blueprint $table) {

            $table->id('HAB_id');
            $table->integer('HAB_numero_habitacion');

            $table->double('HAB_precio');

            $table->foreignId('HAB_distribuidor_id')->constrained('distribuidores', 'DIS_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones_precios');
    }
};
