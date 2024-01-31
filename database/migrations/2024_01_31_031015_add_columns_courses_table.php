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
        Schema::table('courses', function (Blueprint $table){
            $table->string('slug');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('format',['очная','очно-заочная с ДОТ']);

            $table->string('for_who_title_1');
            $table->string('for_who_title_2');
            $table->string('for_who_title_3');
            $table->string('for_who_title_4');

            $table->string('for_who_subtitle_1');
            $table->string('for_who_subtitle_2');
            $table->string('for_who_subtitle_3');
            $table->string('for_who_subtitle_4');

            $table->text('about');
        });
    }

    /**
     * Reverse the migrations.
     */
//    public function down(): void
//    {
//        //
//    }
};
