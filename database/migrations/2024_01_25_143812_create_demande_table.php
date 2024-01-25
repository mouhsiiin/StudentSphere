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
        Schema::create('demande', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->enum('type_demande', ['rendez-vous', 'Justifier une absence', 'changement de groupe de TP', 'lettre de recommandation']);
            $table->unsignedBigInteger('expediteur_demande_id'); // Assurez-vous que le type est le même que la clé primaire dans la table de référence
            $table->foreign('expediteur_demande_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande');
    }
};
