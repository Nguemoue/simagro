<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', static function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre du projet
            $table->string('poster',200); // Poster du projet
            $table->text('description'); // Description
            $table->string('icon'); // Icône prédéfinie (même système que services)
            $table->text('content'); // Détails supplémentaires
            $table->string('project_url')->nullable(); // URL vers le projet réalisé
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
