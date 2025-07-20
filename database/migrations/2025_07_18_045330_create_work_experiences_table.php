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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->date('inclusive_dates_from')->nullable();
            $table->date('inclusive_dates_to')->nullable();
            $table->string('position_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('salary_grade')->nullable();
            $table->string('status_of_appoinment')->nullable();
            $table->enum('government_service', ['yes', 'no'])->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
