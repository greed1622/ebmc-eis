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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('level', ['elementary', 'secondary', 'vocational_trade_course', 'college', 'graduate_studies'])->default('college');
            $table->string('school_name');
            $table->string('degree_course')->nullable();
            $table->string('period_from');
            $table->string('period_to');
            $table->string('highest_level_units_earned')->nullable();
            $table->string('year_graduated')->nullable();
            $table->string('scholarship_honors_received')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
