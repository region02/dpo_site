<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Feedback;
use App\Models\UserCourse;
use App\MoonShine\Resources\CourseResource;
use App\MoonShine\Resources\CourseTypeResource;
use App\MoonShine\Resources\FeedbackResource;
use App\MoonShine\Resources\TeacherResource;
use App\MoonShine\Resources\UserCourseResource;
use MoonShine\Menu\MenuDivider;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),
            MenuItem::make(
                static fn() => 'Курсы',
                new CourseResource()
            )
                ->icon('heroicons.outline.folder'),
            MenuItem::make(
                static fn() => 'Типы',
                new CourseTypeResource()
            )
                ->icon('heroicons.outline.light-bulb'),
            MenuItem::make(
                static fn() => 'Преподаватель',
                new TeacherResource()
            )
                ->icon('heroicons.outline.globe-alt'),
            MenuDivider::make(),
            MenuItem::make(
                static fn() => 'Обратная связь',
                new FeedbackResource()
            )
                ->badge(fn() => Feedback::count())
                ->icon('heroicons.outline.check-badge'),
            MenuItem::make(
                static fn() => 'Записи на курсы',
                new UserCourseResource()
            )
                ->badge(fn() => UserCourse::count())
                ->icon('heroicons.outline.bookmark'),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
