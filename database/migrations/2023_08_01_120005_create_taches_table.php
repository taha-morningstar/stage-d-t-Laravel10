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
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
        //  $table->unsignedBigInteger('developpeur_id');
        //     $table->unsignedBigInteger('users_id');
        //     $table->unsignedBigInteger('projet_id');
            $table->string("nom");
            $table->string("description");
            $table->date("date_debut");
            $table->date("date_fin");
             $table->enum("statut",['active','inactive','en attente'])->default("en attente");
        //  $table->foreign('developpeur_id')->references('id')->on('developpeurs');
        //     $table->foreign('users_id')->references('id')->on('users');
        //     $table->foreign('projet_id')->references('id')->on('projet');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
