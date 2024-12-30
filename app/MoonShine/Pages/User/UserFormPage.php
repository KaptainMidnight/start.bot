<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\User;

use App\Enums\SexEnum;
use App\MoonShine\Resources\PassportResource;
use MoonShine\Laravel\Fields\Relationships\HasOne;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Enum;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use Throwable;

class UserFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Tabs::make([
                Tabs\Tab::make('Данные ученика', [
                    ID::make(),
                    Text::make('Фамилия', 'surname'),
                    Text::make('Имя', 'name'),
                    Text::make('Отчество', 'patronymic'),
                    Text::make('Username'),
                    Date::make('Дата рождения', 'birth_date')
                        ->format('d.m.Y'),
                    Enum::make('Пол', 'sex')
                        ->attach(SexEnum::class),
                    Text::make('Место рождения', 'birth_place'),
                ]),
                Tabs\Tab::make('Паспортные данные', [
                    HasOne::make('Паспорт', 'passport', resource: PassportResource::class)
                ])
            ])
        ];
    }
}
