<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Passport;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Passport>
 */
class PassportResource extends ModelResource
{
    protected string $model = Passport::class;

    protected string $title = 'Паспорта';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Кем выдан', 'issuer'),
            Text::make('Дата выдачи', 'issue_date'),
            Text::make('Код подразделения', 'post_code'),
            Text::make('Серия и номер паспорта', 'serial_number'),
            BelongsTo::make('Ученик', 'user')
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make()->sortable(),
                Text::make('Кем выдан', 'issuer'),
                Text::make('Дата выдачи', 'issue_date'),
                Text::make('Код подразделения', 'post_code'),
                Text::make('Серия и номер паспорта', 'serial_number')->mask('99 99 999999'),
                BelongsTo::make('Ученик', 'user', formatted: fn ($user) => "$user->surname $user->name $user->patronymic")
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Кем выдан', 'issuer'),
            Text::make('Дата выдачи', 'issue_date'),
            Text::make('Код подразделения', 'post_code'),
            Text::make('Серия и номер паспорта', 'serial_number'),
            BelongsTo::make('Ученик', 'user')
        ];
    }

    /**
     * @param Passport $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
