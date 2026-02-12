<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;

class IsActive
{
    public function __invoke(Builder $builder): void
    {
        $builder->where('status', 1);
    }
}