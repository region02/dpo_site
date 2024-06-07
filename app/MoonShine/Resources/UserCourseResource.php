<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserCourse;

use Illuminate\Support\Str;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Fields\Email;
use MoonShine\Fields\Field;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\MoonShineUI;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

/**
 * @extends ModelResource<UserCourse>
 */
class UserCourseResource extends ModelResource
{
    protected string $model = UserCourse::class;

    protected string $title = 'UserCourses';

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


    public function indexFields(): array
    {
        return [
            Block::make([
                Preview::make('Обработано','deleted_at',fn($item) => $item->deleted_at??'Ожидает')
                    ->badge(fn($status,Field $field) => is_null($status)?'error': 'success'),
                Text::make('ФИО','name')->sortable()->showOnExport(),
                Email::make('Почта', 'email')->showOnExport(),
                Phone::make('Номер телефона','phone')->showOnExport(),
                BelongsTo::make('Курс','course',resource: new CourseResource(),
                    formatted: fn($item)=>Str::limit($item->title,20)
                )

            ]),
        ];
    }

    public function detailFields(): array
    {
        return [
            Block::make([
                Preview::make('Обработано','deleted_at',fn($item) => $item->deleted_at??'Ожидает')
                    ->badge(fn($status,Field $field) => is_null($status)?'error': 'success'),
                Text::make('ФИО','name')->sortable()->showOnExport(),
                Email::make('Почта', 'email')->showOnExport(),
                Phone::make('Номер телефона','phone')->showOnExport(),
                BelongsTo::make('Курс','course',resource: new CourseResource(),
//                    formatted: fn($item)=>$item->title
                )

            ]),
        ];
    }

    public function formFields(): array
    {
        return [
            Block::make([
                Preview::make('Обработано','deleted_at',fn($item) => $item->deleted_at??'Ожидает')
                    ->badge(fn($status,Field $field) => is_null($status)?'error': 'success'),
                Text::make('ФИО','name')->sortable()->showOnExport(),
                Email::make('Почта', 'email')->showOnExport(),
                Phone::make('Номер телефона','phone')->showOnExport(),
                BelongsTo::make('Курс','course',resource: new CourseResource(),
                    formatted: fn($item)=>$item->title,
                )->readonly(),

            ]),
        ];
    }
    public function rules(Model $item): array
    {
        return [];
    }
}
