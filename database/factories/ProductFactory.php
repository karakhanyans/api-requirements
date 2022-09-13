<?php

namespace Database\Factories;

use App\Enums\ProductCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    public array $skus = [
        '000001',
        '000002',
        '000003',
        '000004',
        '000005',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sku' => collect($this->skus)->random(),
            'category' => collect(ProductCategories::values())->random(),
            'name' => fake()->name,
            'price' => fake()->randomNumber(6),
        ];
    }
}
