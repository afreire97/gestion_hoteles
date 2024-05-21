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
        Schema::create('porcentajes', function (Blueprint $table) {



            $table->id('POR_id');
            $table->string('POR_nombre');
            $table->double('POR_cifra');
            $table->foreignId('POR_distribuidor_id')->constrained('distribuidores', 'DIS_id')->onDelete('cascade');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porcentajes');
    }
};
