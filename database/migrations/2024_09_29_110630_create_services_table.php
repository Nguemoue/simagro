<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('presentation_text')->nullable();
            $table->text('description');
            $table->string('icon'); // Icône prédéfinie
            $table->text('content'); // Détails supplémentaires
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
