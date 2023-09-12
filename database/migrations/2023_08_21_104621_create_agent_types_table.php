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
        Schema::create('agent_type', function (Blueprint $table) {
            $table->id();
            $table->string("type_name");
            $table->string("type_status")->nullable();
            $table->string("type_office");
            $table->string("type_position");
            $table->date("type_startdate");
            $table->string("type_salary");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_type');
    }
};
