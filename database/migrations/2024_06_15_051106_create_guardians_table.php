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
        Schema::create('guardians', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->references('id')->on('users');
            $table->string('f_name')->nullable();
            $table->date('f_birth')->nullable();
            $table->string('f_attainment')->nullable();
            $table->string('f_occupation')->nullable();
            $table->string('f_address')->nullable();
            $table->string('f_income')->nullable();
            $table->string('f_contact')->nullable();
            $table->string('m_name')->nullable();
            $table->date('m_birth')->nullable();
            $table->string('m_attainment')->nullable();
            $table->string('m_occupation')->nullable();
            $table->string('m_address')->nullable();
            $table->string('m_income')->nullable();
            $table->string('m_contact')->nullable();
            $table->string('g_name')->nullable();
            $table->date('g_birth')->nullable();
            $table->string('g_attainment')->nullable();
            $table->string('g_occupation')->nullable();
            $table->string('g_address')->nullable();
            $table->string('g_income')->nullable();
            $table->string('g_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
