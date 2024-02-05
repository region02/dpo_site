<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Создаем от 3 до 6 CourseType
        \App\Models\CourseType::factory(random_int(3, 6))->create();

        // Создаем 2 Teacher
        \App\Models\Teacher::factory(2)->create();

        // Создаем от 7 до 10 Course и связываем их с рандомными CourseType и Teacher
        \App\Models\Course::factory(random_int(7, 10))
            ->create()
            ->each(function ($course) {
                // Связываем Course с рандомными CourseType
                $course->courseType()->associate(\App\Models\CourseType::inRandomOrder()->first())->save();

                // Связываем Course с рандомным Teacher
                $course->teacher()->associate(\App\Models\Teacher::inRandomOrder()->first())->save();
            });
    }
}
