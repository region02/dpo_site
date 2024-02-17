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
                        Text::make('Название','title')
                            ->customAttributes(['maxlength' => '255'])
                            ->default('Название'),
                        Text::make('Подзаголовок', 'subtitle')
                            ->customAttributes(['maxlength' => '255'])
                            ->default('Текст мотивация'),
                        Number::make('Стоимость', 'cost')
                            ->default(60000),
                        Image::make('Изображение', 'avatar')
                            ->required()
                            ->disk('public')
                            ->dir('course/avatar'),
                    ])
                ])->columnSpan(6),
                Column::make([
                    Block::make([
                        BelongsTo::make('Тип', 'courseType', resource: new CourseTypeResource())
                            ->withImage('avatar', 'public','course_type/avatar'),
                        Slug::make('Slug','slug')->from('title')->unique()->hint('поддерживает авто-генерацию(можно оставить пустым)'),
                        Date::make('Дата начала','start_at')->nullable(),
                        BelongsToMany::make('Преподаватель', 'teachers', resource: new TeacherResource())
                            ->selectMode()
                            ->withImage('avatar', 'public', 'teacher/avatar'),
                    ])
                ])->columnSpan(6),
                Column::make([
                    Block::make([
                        Text::make('Продолжительность', 'duration')
                            ->default('N месяца (N пары в неделю = N часов)'),
                        Text::make('Нагрузка', 'load')
                            ->default('72 ак.ч.  в том числе 44 аудит. ч.'),
                        Text::make('Формат', 'format')
                            ->default('очный / онлайн+возможность присутствовать на кампусе'),
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
                            ->default([
                                [
                                    'title' => 'Для лиц, желающих научиться переводить по-переводчески',
                                    'subtitle' => 'Чтобы корректно и профессионально осуществлять переводческую деятельность'
                                ]
                            ]),
                        Json::make('О чём курс', 'section_about_what')
                            ->fields([
                                Textarea::make('Пункт', 'point')
                                    ->nullable(),
                            ])
                            ->creatable()
                            ->removable(),
                        Json::make('Результат', 'section_result')
                            ->fields([
                                Position::make(),
                                Textarea::make('Текст', 'content')
                                    ->nullable(),
                            ])
                            ->nullable()
                            ->creatable()
                            ->removable(),

                        Json::make('Как проходят занятия?', 'section_how_it_goes')
                            ->fields([
                                TinyMce::make('Первый блок', 'first')
                                    ->default('У вас будет <strong>8 часов практики</strong> в режиме реального времени каждую неделю')
                                    ->hint('Можно выделять жирным текст')
                                    ->toolbar('bold')
                                    ->menubar('edit view tools')
                                    ->locale('ru'),
                                TinyMce::make('Второй блок', 'second')
                                    ->default('Вы получите <strong>обратную связь</strong> от преподавателя по каждому выполненному заданию')
                                    ->hint('Можно выделять жирным текст')
                                    ->hint('Можно выделять жирным текст')
                                    ->toolbar('bold')
                                    ->menubar('edit view tools')
                                    ->locale('ru'),
                                TinyMce::make('Третий блок', 'third')
                                    ->default('На каждом занятии вы приобретете определенный <strong>багаж знаний</strong>, сформированных переводческих умений и навыков')
                                    ->hint('Можно выделять жирным текст')
                                    ->hint('Можно выделять жирным текст')
                                    ->toolbar('bold')
                                    ->menubar('edit view tools')
                                    ->locale('ru'),
                            ])->creatable(false)->removable(false),

                        Json::make('Расписание', 'section_schedule')
                            ->fields([
                                Textarea::make('Заголовок', 'title'),
                                Json::make('Подзаголовки', 'content')
                                    ->fields([Textarea::make('Пункт','li')])
                                    ->removable(),
                            ])
                            ->creatable()
                            ->removable(),

                        Json::make('Описание цены', 'cost_description')
                            ->fields([
                                Textarea::make('Пункт', 'point')
                                    ->default('Описание того, что входит в цену'),
                            ])
                            ->creatable()
                            ->removable(),


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
