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
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('judul');
            $table->string('slug');
            $table->text('konten');
            $table->string('status');
            $table->uuid('uuid_kategori');
            $table->string('author');
            $table->integer('pengunjung')->nullable();
            $table->integer('like')->nullable();
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postings');
    }
};
