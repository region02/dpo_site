<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Course;

use App\MoonShine\Resources\CourseTypeResource;
use App\MoonShine\Resources\TeacherResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Number;
use MoonShine\Fields\Position;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\FormPage;

class CourseFormPage extends FormPage
{
    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    Block::make([
                        Text::make('Название','title'),
                        Text::make('Подзаголовок', 'subtitle'),
                        Number::make('Стоимость', 'cost'),
                        Image::make('Изображение', 'avatar')
                            ->disk('public')
                            ->dir('course/avatar'),
                        BelongsTo::make('Тип', 'courseType', resource: new CourseTypeResource()),
                        Slug::make('Slug','slug')->from('title')->unique(),
                        Date::make('Дата начала','start_at'),
                        Text::make('Продолжительность', 'duration'),
                        Text::make('Нагрузка', 'load'),
                        Text::make('Формат', 'format'),
                        Json::make('Для кого','section_who')
                            ->fields([
                                Textarea::make('Заголовок', 'title')
                                    ->default('Для лиц, желающих научиться переводить по-переводчески')
                                    ->nullable(),
                                Textarea::make('Заголовок', 'subtitle')
                                    ->default('Чтобы корректно и профессионально осуществлять переводческую деятельность')
                                    ->nullable(),
                            ])
                            ->nullable()
                            ->creatable()
                            ->removable()
                            ->default(null),
                        Json::make('О чём курс', 'section_about_what')
                            ->fields([
                                Textarea::make('Пункт', 'point')

                                    ->nullable(),
                            ])
                            ->creatable()
                            ->removable()
                            ->default('о чем'),
                        Json::make('Результат', 'section_result')
                            ->fields([
                                Position::make(),
                                Textarea::make('Текст', 'content')
                                    ->nullable(),
                            ])
                            ->nullable()
                            ->creatable()
                            ->removable()
                            ->default(null),

                        Json::make('О чём', 'section_how_it_goes')
                            ->fields([
                                TinyMce::make('Первый блок', 'first')
                                    ->nullable()
                                    ->hint('что-то про стронг'),
                                TinyMce::make('Второй блок', 'second')
                                    ->nullable()
                                    ->hint('что-то про стронг'),
                                TinyMce::make('Третий блок', 'third')
                                    ->nullable()
                                    ->hint('что-то про стронг'),
                            ])->creatable(false)->removable(false),

                        Json::make('Расписание', 'section_schedule')
                            ->fields([
                                Textarea::make('Заголовок', 'title'),
                                Json::make('Подзаголовки', 'content')
                                    ->fields([Textarea::make('Пункт','li')]),
                            ])
                            ->creatable()
                            ->removable(),

                        BelongsToMany::make('Преподаватель', 'teachers', resource: new TeacherResource())
                            ->required()
                            ->asyncSearch()
                            ->withImage('avatar', 'public', 'teacher/avatar'),

                        Json::make('Описание цены', 'cost_description')
                            ->fields([
                                Textarea::make('Пункт', 'point')

                                    ->nullable(),
                            ])
                            ->creatable()
                            ->removable()
                            ->default('о чем'),


                    ])
                ])->columnSpan(12),
            ]),
        ];
    }

    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}