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
        Schema::create('utente_servizi', function (Blueprint $table) {
            $table->integer('utente_id');
            $table->integer('servizio_id');
            $table->string('tipo');
            $table->integer('prezzo');
            $table->boolean('ativo')->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utente_servizi');
    }
};
