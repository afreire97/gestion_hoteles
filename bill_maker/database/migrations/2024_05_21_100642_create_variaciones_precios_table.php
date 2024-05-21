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
        Schema::create('variaciones_precios', function (Blueprint $table) {


            $table->id('VAR_id');
            $table->foreignId('VAR_tarifa_id')->constrained('tarifas', 'TAR_id')->onDelete('cascade');
            $table->foreignId('VAR_distribuidor_id')->constrained('distribuidores', 'DIS_id')->onDelete('cascade');
            $table->foreignId('VAR_comercial_id')->constrained('comerciales', 'COM_id')->onDelete('cascade');
            $table->double('VAR_cifra');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variaciones_precios');
    }
};
