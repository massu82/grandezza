<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título de la publicación
            $table->string('slug')->unique(); // URL amigable
            $table->text('content'); // Contenido HTML
            $table->string('image')->nullable(); // Imagen destacada
            $table->foreignId('category_id')->constrained(); // Relación con categorías
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
