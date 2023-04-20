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
        Schema::create('course_details', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('teacher_name');
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->string('course_fee');
            $table->integer('available_seats');
            $table->string('schedule');
            $table->string('image')->nullable();
            $table->string('course_category');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_details');
    }
};
