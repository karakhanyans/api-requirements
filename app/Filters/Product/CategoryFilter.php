<?php

namespace App\Filters\Product;

use App\Contracts\FilterInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryFilter implements FilterInterface
{
    public function search(Builder $query, Request $request, string $key): Builder
    {
        return $query->when($request->get($key), function ($query, $category) {
            return $query->where(DB::raw('lower(category)'), '=', strtolower($category));
        });
    }
}
