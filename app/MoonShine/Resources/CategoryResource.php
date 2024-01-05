<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\Category;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Number; 

class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Категории';

    protected string $slug = 'slug';

    public string $titleField = 'title';

    public function fields(): array
    {
        return [
            Block::make("Категории",[
                ID::make()->sortable(),
                Text::make('Название', 'title')
                    ->hint("Введите название категории")
                    ->required()
                    ->sortable(),
                Slug::make('slug', 'slug')->unique(),
                Number::make('Сортировка', 'sorting')
                ->fill(0) 
                ->hint("По умолчанию 0")
                ->min(0) 
                ->max(100000) 
                ->step(1)
                ->buttons()
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
