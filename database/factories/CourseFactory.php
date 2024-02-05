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
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'cost' => $this->faker->randomNumber(5),
            'avatar' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug,
            'start_at' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'duration' => $this->faker->randomNumber(2),
            'load' => $this->faker->randomNumber(2),
            'format' => $this->faker->word,
            'section_who' => ['description' => $this->faker->paragraph],
            'section_about_what' => $this->faker->paragraph,
            'section_result' => ['description' => $this->faker->paragraph],
            'section_how_it_goes' => ['description' => $this->faker->paragraph],
            'section_schedule' => ['description' => $this->faker->paragraph],
            'cost_description' => $this->faker->sentence,
            'course_type_id' => CourseType::factory(),
            'teacher_id' => Teacher::factory(),
        ];
    }
}
