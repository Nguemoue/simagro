<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonies', static function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string("company_name");
            $table->text('feedback');
            $table->string('client_photo_url')->nullable(); // Photo optionnelle
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonies');
    }
};
