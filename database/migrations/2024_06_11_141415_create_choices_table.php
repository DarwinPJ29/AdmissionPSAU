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
        Schema::create('choices', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->references('id')->on('users');
            $table->ulid('first')->nullable();
            $table->ulid('second')->nullable();
            $table->ulid('third')->nullable();
            $table->string('school_year')->nullable();
            $table->string('first_reason')->nullable();
            $table->string('second_reason')->nullable();
            $table->integer('semester')->nullable();
            $table->integer('type')->nullable();
            $table->boolean('failed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
