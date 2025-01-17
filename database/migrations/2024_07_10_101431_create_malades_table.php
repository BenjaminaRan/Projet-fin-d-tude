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
        Schema::create('malades', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('age');
            $table->string('adresse');
            $table->string('phone');
            $table->string('cas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('malades');
    }
};
