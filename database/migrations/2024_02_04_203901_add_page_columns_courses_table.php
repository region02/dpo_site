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
        Schema::table('courses', function (Blueprint $table) {
//            $table->unsignedBigInteger('teacher_id')->nullable();
//            $table->foreign('teacher_id')->references('id')->on('teachers');
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
            $table->text('cost_description');



        });
    }

};
