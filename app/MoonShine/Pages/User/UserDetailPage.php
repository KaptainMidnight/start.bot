<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\User;

use App\Enums\SexEnum;
use MoonShine\Laravel\Fields\Relationships\HasOne;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Enum;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use Throwable;

class UserDetailPage extends DetailPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
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

            HasOne::make('Паспорт', 'passport')
                ->fields([
                    ID::make()->sortable(),
                    Text::make('Кем выдан', 'issuer'),
                    Text::make('Дата выдачи', 'issue_date'),
                    Text::make('Код подразделения', 'post_code'),
                    Text::make('Серия и номер паспорта', 'serial_number')->mask('99 99 999999'),
                ]),
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
