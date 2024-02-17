<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\MoonShine\Pages\Course\CourseIndexPage;
use App\MoonShine\Pages\Course\CourseFormPage;
use App\MoonShine\Pages\Course\CourseDetailPage;

use MoonShine\Resources\ModelResource;

class CourseResource extends ModelResource
{
    protected string $model = Course::class;

    protected string $title = 'Courses';

    public function pages(): array
    {
        return [
            CourseIndexPage::make($this->title()),
            CourseFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            CourseDetailPage::make(__('moonshine::ui.show')),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
