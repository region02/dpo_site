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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('subtitle');
            $table->string('avatar');
            $table->foreignId('course_type_id')->constrained('course_types')->cascadeOnDelete();
            $table->boolean('started');

            $table->foreignId('teacher_id')->nullable()->constrained('teachers');
            $table->string('slug');

            $table->date('start_at')->nullable();
            $table->string('duration');
            $table->string('load');
            $table->string('format');

            $table->json('section_who');

            $table->text('section_about_what');

            $table->json('section_result');

            $table->json('section_how_it_goes');

            $table->json('section_schedule');


            $table->integer('cost');
            $table->text('cost_description');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
//    public function down(): void
//    {
//        Schema::dropIfExists('courses');
//    }
};
