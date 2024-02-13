<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\CourseType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'subtitle' => fake()->sentence(),
            'cost' => fake()->randomNumber(5),
            'avatar' => fake()->imageUrl(),
            'slug' => fake()->slug(),
            'start_at' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'duration' => fake()->randomNumber(2),
            'load' => fake()->randomNumber(2),
            'format' => fake()->word,
            'section_who' => ['description' => fake()->paragraph],
            'section_about_what' => fake()->paragraph,
            'section_result' => ['description' => fake()->paragraph],
            'section_how_it_goes' => ['description' => fake()->paragraph],
            'section_schedule' => ['description' => fake()->paragraph],
            'cost_description' => fake()->sentence(),
            'course_type_id' => CourseType::factory(),
            'teacher_id' => Teacher::factory(),
        ];
    }
}
