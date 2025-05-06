<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 100);
            $table->string('email', 100);
            $table->string('celular', 20)->nullable();
            $table->string('razon', 150);
            $table->text('mensaje');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('contactos');
    }
};
