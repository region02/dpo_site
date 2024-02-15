<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\CourseType;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $courseTypesCount = rand(3, 5);
        CourseType::factory()->count($courseTypesCount)->create();

        $teachersCount = rand(15, 20);
        Teacher::factory()->count($teachersCount)->create();

        $coursesCount = rand(9,15);
        Course::factory()
            ->count($coursesCount)
            ->create([
                'course_type_id' => fn() => CourseType::inRandomOrder()->first()->id
            ]);
        foreach (Course::all() as $course){
            $teachers= Teacher::inRandomOrder()->limit(rand(1,3))->get();
            foreach ($teachers as $teacher){
                CourseTeacher::create([
                    'course_id' => $course->id,
                    'teacher_id' => $teacher->id
                ]);
            }
        }


    }
}
