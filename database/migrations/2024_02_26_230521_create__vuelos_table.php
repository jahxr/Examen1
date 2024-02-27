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
        Schema::create('Vuelos', function (Blueprint $table) {
            $table->string('numeroVuelo',5)->primarykey();
            $table->string('origen',10);
            $table->string('destino',10);
            $table->integer('numeroAsientos');
            $table->timestamp('FechaDeSalida');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_vuelos');
    }
};
