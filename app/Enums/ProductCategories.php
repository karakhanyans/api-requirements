<?php

namespace App\Enums;

enum ProductCategories: string
{
    use Arrayable;

    case INSURANCE = 'insurance';
    case VEHICLE = 'vehicle';
}
