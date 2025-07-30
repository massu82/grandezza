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
        Schema::create('catas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('salon');
            $table->string('logo')->nullable();
            $table->string('expositor');
            $table->text('descripcion');
            $table->dateTime('fecha_hora');
            $table->unsignedInteger('capacidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catas');
    }
};
