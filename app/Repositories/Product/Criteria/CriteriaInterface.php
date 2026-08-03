<?php

namespace App\Repositories\Product\Criteria;

use Illuminate\Database\Eloquent\Builder;

interface CriteriaInterface
{
    public function apply(Builder $query):Builder;
}
