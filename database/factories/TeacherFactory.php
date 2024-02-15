<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'position' => fake()->paragraph(1,2),
            'about' => function() {
                $res = [];
                for ($i=0;$i<rand(2,6);$i++) {
                    $res[] = [
                        'content' => fake()->paragraph(1,4),
                    ];
                }
                return $res;
            },
            'avatar' => "teacher/avatar/" . fake()->image(
                dir: storage_path('app/public/teacher/avatar'),
                width: 129,
                height: 129,
                category: 'animals',
                fullPath: false,
            ),
        ];
    }
}
