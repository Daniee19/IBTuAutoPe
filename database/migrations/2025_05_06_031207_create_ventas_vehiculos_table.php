<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ventas_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->string('telefono');
            $table->string('tipo_documento')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('kilometraje')->nullable();
            $table->string('anio_fabricacion')->nullable();
            $table->string('placa')->nullable();
            $table->text('mensaje')->nullable();
            $table->string('archivo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas_vehiculos');
    }
};
