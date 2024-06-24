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
        Schema::create('users', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('applicant_no')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('activated')->default(0);
            $table->integer('role');
            $table->boolean('form_done')->default(0);
            $table->boolean('requirements_done')->default(0);
            $table->string('requirements_remarks')->nullable();
            $table->boolean('schedule_done')->default(0);
            $table->boolean('score_done')->default(0);
            $table->boolean('score_done')->default(0);
            $table->boolean('evaluation')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
