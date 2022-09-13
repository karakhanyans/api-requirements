<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FiltersAbstract
{
    protected array $filters = [];

    public function __construct(protected Request $request)
    {
    }

    public function search(Builder $query): Builder
    {
        foreach ($this->getFilters() as $filter => $value) {
            $this->resolveFilter($filter)->search($query, $this->request, $filter);
        }

        return $query;
    }

    protected function resolveFilter($filter): mixed
    {
        return new $this->filters[$filter]();
    }

    protected function getFilters(): array
    {
        return $this->filters;
    }
}
