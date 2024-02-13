<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\CourseResource;
use App\MoonShine\Resources\CourseTypeResource;
use App\MoonShine\Resources\TeacherResource;
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
            MenuGroup::make(static fn() => 'Курсы', [
                MenuItem::make(
                    static fn() => 'Курсы',
                    new CourseResource()
                ),
                MenuItem::make(
                    static fn() => 'Типы',
                    new CourseTypeResource()
                ),
                MenuItem::make(
                    static fn() => 'Преподаватель',
                    new TeacherResource()
                ),
            ]),
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
