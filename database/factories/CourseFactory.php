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
            'avatar' => "course/avatar/" . fake()->image(
                dir: storage_path('app/public/course/avatar'),
                width: 400,
                height: 280,
                category: 'animals',
                fullPath: false,
            ),
            'slug' => fake()->slug(),
            'start_at' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'duration' => fake()->sentence(3),
            'load' => fake()->sentence(4),
            'format' => fake()->sentence(2),
            'section_who' => function() {
                $res = [];
                for ($i=0;$i<4;$i++) {
                    $res[] = [
                        'title' => fake()->sentence(5),
                        'subtitle' => fake()->paragraph(2),
                    ];
                }
                return $res;
            } ,
            'section_about_what' => function() {
                $res = [];
                for ($i=0;$i<rand(2,4);$i++) {
                    $res[] = [
                        'point' => fake()->sentence(rand(4,8)),
                    ];
                }
                return $res;
            } ,
            'section_result' => function() {
                $res = [];
                for ($i=0;$i<6;$i++) {
                    $res[] = [
                        'content' => fake()->sentence(rand(4,8)),
                    ];
                }
                return $res;
            },
            'section_how_it_goes' => [[
                'first' => fake()->paragraph(1,3),
                'second' => fake()->paragraph(1,3),
                'third' => fake()->paragraph(1,3),]
            ],
            'section_schedule' => function() {
                $res = [];
                for ($i=0;$i<rand(2,6);$i++) {
                    $res[] = [
                        'title' => fake()->sentence(rand(4,8)),
                        'content' => [
                            ['li' => fake()->paragraph(1,2),],
                            ['li' => fake()->paragraph(1,2),],
                            ['li' => fake()->paragraph(1,2),],
                            ['li' => fake()->paragraph(1,2),],
                            ['li' => fake()->paragraph(1,2),],
                            ['li' => fake()->paragraph(1,2),],
                        ]

                    ];
                }
                return $res;
            },
            'cost_description' => function() {
                $res = [];
                for ($i=0;$i<rand(2,6);$i++) {
                    $res[] = [
                        'point' => fake()->sentence(rand(4,8)),
                    ];
                }
                return $res;
            },
        ];
    }
}
