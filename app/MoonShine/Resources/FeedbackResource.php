<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feedback;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Fields\Enum;
use MoonShine\Fields\Field;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\MoonShineRequest;
use MoonShine\MoonShineUI;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use Symfony\Component\HttpFoundation\Response;

class FeedbackResource extends ModelResource
{
    protected string $model = Feedback::class;

    protected string $title = 'Обратная связь';
    protected bool $isAsync = true;
    public function getActiveActions(): array
    {
        if (request('query-tag') == 'arxiv') {
            return ['index','view'];
        }

        return ['index', 'delete', 'view'];
    }

    public function queryTags(): array
    {
        return [
            QueryTag::make('Архив', fn(Builder $builder) => $builder->onlyTrashed())
                ->icon('heroicons.outline.archive-box'),
        ];
    }

    public function resolveItemQuery(): Builder
    {
        return parent::resolveItemQuery()
            ->withTrashed();
    }



    public function buttons(): array
    {
        return [
            ActionButton::make('')
                ->icon('heroicons.outline.archive-box-x-mark')
                ->canSee(fn($item) => !is_null($item->deleted_at))
                ->method('restore', events: ['table-updated-index-table']),

            ActionButton::make('')
                ->icon('heroicons.outline.trash')
                ->customAttributes(['class' => 'btn-secondary'])
                ->canSee(fn($item) => !is_null($item->deleted_at))
                ->method('deleteForever', events: ['table-updated-index-table'])
        ];
    }

    public function restore(): void
    {
        $item = $this->getItem();

        if($item->trashed()){
            $item->restore();
            MoonShineUI::toast("Заявка от $item->name восстановлена!", type: 'success');
        }
    }

    public function deleteForever(): void
    {
        $item = $this->getItem();

        if($item->trashed()){
            $item->forceDelete();
            MoonShineUI::toast("Заявка от $item->name удалена окончательно!", type: 'success');
        }
    }

    public function fields(): array
    {
        return [
            Block::make([
                Preview::make('Завершено','deleted_at',fn($item) => $item->deleted_at??'Ожидает')
                    ->badge(fn($status,Field $field) => is_null($status)?'error': 'success'),
                Text::make('ФИО','name')->sortable()->showOnExport(),
                Text::make('Тип связи','feedback_type')->showOnExport()->sortable(),
                Text::make('Контакт', 'contact')->showOnExport(),
                Text::make('Текст Вопроса','question',formatted: fn($item) => Str::limit($item->question,15))->hideOnDetail(),
                Textarea::make('Текст Вопроса','question')->showOnExport()->hideOnIndex(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
