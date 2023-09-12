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
        Schema::create('projets', function (Blueprint $table) {
            $table->id("id");
            // $table->unsignedBigInteger('client_id');
            // $table->unsignedBigInteger('responsable_id');
            $table->string("name");
            $table->string("description");
            $table->date("start_date");
            $table->date("end_date");
            $table->string("status");
            $table->integer("budget");
            // $table->foreign('client_id')->references('id')->on('client');
            // $table->foreign('responsable_id')->references('id')->on('responsable');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
