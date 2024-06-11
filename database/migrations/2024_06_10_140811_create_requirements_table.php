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
        Schema::create('requirements', function (Blueprint $table) {
            $table->ulid('id');
            $table->string('title');
            $table->boolean('masteral')->default(0);
            $table->boolean('doctoral')->default(0);
            $table->boolean('transferee')->default(0);
            $table->boolean('freshmen')->default(0);
            $table->boolean('second_courser')->default(0);
            $table->boolean('required')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirements');
    }
};
