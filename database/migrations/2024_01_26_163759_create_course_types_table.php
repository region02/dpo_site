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
        Schema::create('course_types', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('color_from');
            $table->string('color_to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
//    public function down(): void
//    {
//        Schema::dropIfExists('course_types');
//    }
};
