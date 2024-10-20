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
        Schema::create('jokis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type',['cat1', 'cat2', 'cat3'] );
            $table->string('email');
            $table->string('contact');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jokis');
    }
};
