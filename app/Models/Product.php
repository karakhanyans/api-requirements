<?php

namespace App\Models;

use App\Filters\Product\ProductFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

    public function scopeSearch(Builder $query, Request $request): Builder
    {
        return (new ProductFilters($request))->search($query);
    }
}
