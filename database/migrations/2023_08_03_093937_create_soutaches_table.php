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
        Schema::create('soutaches', function (Blueprint $table) {
            $table->id();
         $table->unsignedBigInteger('developpeur_id');
         $table->unsignedBigInteger('responsable_id');
         $table->unsignedBigInteger('taches_id');
            $table->string("titre");
            $table->string("description");
            $table->date("date_debut");
            $table->date("date_fin");
            $table->enum("priority",["haigh","medium","low"])->default("medium");
            $table->enum("statut",['active','inactive','en attente'])->default("en attente");
       
            $table->timestamps();  $table->foreign('developpeur_id')->references('id')->on('developpeurs');
         $table->foreign('responsable_id')->references('id')->on('responsables');
         $table->foreign('taches_id')->references('id')->on('taches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soutaches');
    }
};
