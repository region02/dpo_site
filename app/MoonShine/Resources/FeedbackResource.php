<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Feedback;

use MoonShine\Fields\Enum;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class FeedbackResource extends ModelResource
{
    protected string $model = Feedback::class;

    protected string $title = 'Feedback(TEST-PAGE)';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('ФИО','name')->sortable(),
                Text::make('Тип связи','feedback_type')->sortable(),
                Text::make('Контакт', 'contact'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
