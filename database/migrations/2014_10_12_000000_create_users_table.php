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
            $table->integer('status')->default(0);
            $table->boolean('is_default_pass')->default(1);
            $table->boolean('isPrivacy')->default(0);
            $table->integer('otp')->default(0);
            $table->dateTime('otp_expires')->nullable();
            $table->string('course_admitted_id')->nullable();
            $table->string('college_to_evaluate')->nullable();
            $table->string('requirements_remarks')->nullable();
            $table->string('date_submitted')->nullable();
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
