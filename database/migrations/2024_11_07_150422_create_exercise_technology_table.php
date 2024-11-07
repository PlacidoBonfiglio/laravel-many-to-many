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
        Schema::create('exercise_technology', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger("exercise_id");
            $table->foreign("exercise_id")->references("id")->on("exercises");

            $table->unsignedBigInteger("technology_id");
            $table->foreign("technology_id")->references("id")->on("technologies");

            $table->primary(["exercise_id", "technology_id"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_technology');
    }
};
