<?php

namespace Database\Factories;

use App\Models\CourseType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseType>
 */
class CourseTypeFactory extends Factory
{
    protected $model = CourseType::class;

    public function definition(): array
    {
        return [
            'text' => fake()->unique()->sentence(random_int(1,5)),
            'color_from' => fake()->hexColor(),
            'color_to' => fake()->hexColor(),
            'avatar' => "course_type/avatar/" . fake()->image(
                    dir: storage_path('app/public/course_type/avatar'),
                    width: 165,
                    height: 165,
                    category: 'animals',
                    fullPath: false,
                ),

        ];
    }
}
