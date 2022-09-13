<?php

namespace App\Filters\Product;

use App\Contracts\FilterInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PriceFilter implements FilterInterface
{
    public function search(Builder $query, Request $request, string $key): Builder
    {
        return $query->when($request->get($key), function ($query, $price) {
            return $query->where('price', '=', $price);
        });
    }
}
