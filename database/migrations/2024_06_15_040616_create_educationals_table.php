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
        Schema::create('educationals', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->references('id')->on('users');
            $table->string('elem_name')->nullable();
            $table->string('elem_address')->nullable();
            $table->string('elem_date')->nullable();
            $table->string('high_name')->nullable();
            $table->string('high_address')->nullable();
            $table->string('high_date')->nullable();
            $table->string('attended_name')->nullable();
            $table->string('attended_address')->nullable();
            $table->string('attended_date')->nullable();
            $table->string('shs_from')->nullable();
            $table->string('shs_from_type')->nullable();
            $table->string('shs_date')->nullable();
            $table->string('shs_average')->nullable();
            $table->string('lrn')->nullable();
            $table->string('first_time')->nullable();
            $table->string('is_first_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educationals');
    }
};
