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
        Schema::create('developpeurs', function (Blueprint $table) {
            $table->id("id");
            $table->string("nom");
            $table->string("email")->unique();
            $table->integer("telephone")->unique();
            $table->string("competences_tech");
            $table->string("niveau_experience");
            $table->string("projets");
            $table->string("taches");
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developpeurs');
    }
};
