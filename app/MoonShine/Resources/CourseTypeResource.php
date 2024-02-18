<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\CourseType;

use MoonShine\Components\Boolean;
use MoonShine\Fields\Color;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use function Laravel\Prompts\text;

class CourseTypeResource extends ModelResource
{
    protected bool $createInModal = true;
    protected bool $editInModal = true;
    protected bool $detailInModal= true;
    protected string $column = 'text';

    protected string $model = CourseType::class;

    protected string $title = 'Типы курсов';

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Текст', 'text'),
                Color::make('Начальный цвет градиента', 'color_from')
                    ->default('#FF512F'),
                Color::make('Конечный цвет градиента', 'color_to')
                    ->default('#DD2476'),
                Image::make('Аватар', 'avatar')
                    ->disk('public')
                    ->dir('teacher/avatar'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'text' => ['required', 'string','min:1', 'max:40'],
            'color_from' => ['required', 'string','size:7'],
            'color_to' => ['required', 'string','size:7'],
        ];
    }
}
