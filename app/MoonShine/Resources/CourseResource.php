<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

use MoonShine\Components\Boolean;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class CourseResource extends ModelResource
{
    protected string $model = Course::class;

    protected string $title = 'Course';

    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    Block::make([
                        Text::make('Название','title'),
                        Text::make('Подзаголовок', 'subtitle'),
                        Number::make('Стоимость', 'cost'),
                    ])
                ])->columnSpan(6),
                Column::make([
                    Block::make([
                        Image::make('Изображение', 'avatar')
                            ->disk('public')
                            ->dir('avatar'),
                        BelongsTo::make('Тип', 'courseType', resource: new CourseTypeResource()),
//                        Slug::make('Slug','slug')->from('title')->unique(),
                    ])
                ])->columnSpan(6),
            ]),

        ];

    }

    public function rules(Model $item): array
    {
        return [];
    }
}
