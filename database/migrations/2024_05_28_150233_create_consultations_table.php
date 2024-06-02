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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('expert_id')->constrained('expert_profiles')->cascadeOnDelete();
            $table->date('date_consultation');
            $table->time('heure_debut');
            $table->integer('duree'); // durée en minutes
            $table->float('montant'); // calculé le tarif de l'expert * la durée
            $table->string('statut')->default('non réalisée');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
