<?php

namespace App\Repositories\Product\Criteria;

use Illuminate\Database\Eloquent\Builder;

class CategoryCriteria implements CriteriaInterface
{
    public function __construct(
        private string $categoryId
    ) {}

    public function apply(Builder $query): Builder
    {
        return $query->where('category_id', $this->categoryId);
    }
}
