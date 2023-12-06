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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id');
            $table->foreignId('publisher_id');
            $table->string('name');
            $table->string('ISBN')->unique();
            $table->foreignId('genre_id');
            $table->string('type');
            $table->dateTime('publication-year');
            $table->unsignedDecimal('price');
            $table->integer('condition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
