<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->double('precio');
            $table->string('anio');
            $table->string('hasta');
            $table->string('combustible');
            $table->string('transmision');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
