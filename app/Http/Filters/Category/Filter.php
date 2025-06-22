<?php

namespace App\Http\Filters\Category;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class Filter extends AbstractFilter
{
    public const TITLE = 'title';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
        ];
    }

    public function title(Builder $builder, $value) {
        $builder->where('title', 'like', "%{$value}%");
    }
}
