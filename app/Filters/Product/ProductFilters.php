<?php

namespace App\Filters\Product;

use App\Filters\FiltersAbstract;

class ProductFilters extends FiltersAbstract
{
    protected array $filters = [
        'category' => CategoryFilter::class,
        'price' => PriceFilter::class,
    ];
}
