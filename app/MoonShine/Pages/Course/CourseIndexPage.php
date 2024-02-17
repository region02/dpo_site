<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Course;

use App\MoonShine\Resources\CourseTypeResource;
use App\MoonShine\Resources\TeacherResource;
use Illuminate\Support\Str;
use MoonShine\Fields\Image;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;

class CourseIndexPage extends IndexPage
{
    public function fields(): array
    {
        return [
            Preview::make('Записалось',formatted: fn($item)=>$item->users->count())->badge('info'),
            Text::make('Название', 'title'),
            Text::make('Подзаголовок', 'subtitle',formatted: fn($item) => Str::limit($item->subtitle, 15)),
            Image::make('Изображение', 'avatar')
                ->disk('public')
                ->dir('course/avatar'),
            BelongsTo::make('Тип', 'courseType', resource: new CourseTypeResource(), formatted: fn($item) => Str::limit($item->text, 15))->badge(),

            BelongsToMany::make(
                label: 'Преподаватель',
                relationName: 'teachers',
                formatted: fn($item) => "$item->name",
                resource: new TeacherResource())
                ->inLine(separator: ' ', badge: true),
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
