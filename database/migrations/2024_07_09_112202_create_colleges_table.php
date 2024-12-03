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
        Schema::create('colleges', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('title');
            $table->string('acronym')->nullable();
            $table->boolean('enable')->default(1);
            $table->integer('level')->nullable(); //1 = UnderGraduate, 2 = Masteral, 3 = Doctoral
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
