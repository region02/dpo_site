<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Relationships\HasOne;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class TeacherResource extends ModelResource
{
    protected string $model = Teacher::class;

    protected string $title = 'Teachers';

    protected string $column = 'name';

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('ФИО','name')->default('Фамилия Имя Отчество'),
                Image::make('Аватар', 'avatar')
                    ->disk('public')
                    ->dir('teacher/avatar'),
                Text::make('Должность', 'position')->default('Должность преподавателя'),
                Json::make('О себе', 'about')
                    ->fields([
                        TinyMce::make('Пункт','content'),
                    ])
                    ->creatable()
                    ->removable()
                    ->hideOnIndex(),
                BelongsToMany::make('Курсы','courses', resource:  new CourseResource())
                    ->badge()
                    ->withImage('avatar', 'public', 'course/avatar')

            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
