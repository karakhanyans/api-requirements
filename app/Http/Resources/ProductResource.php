<?php

namespace App\Http\Resources;

use App\Enums\ProductCategories;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array|\JsonSerializable|\Illuminate\Contracts\Support\Arrayable
    {
        $discountPercentage = match (true) {
            $this->category === ProductCategories::INSURANCE->value => 30,
            $this->sku === '0000003' => 15,
            default => null
        };

        $finalPrice = !is_null($discountPercentage)
            ? $this->price - ($this->price * ($discountPercentage / 100))
            : $this->price;

        $price = [
            'original' => $this->price,
            'final' => $finalPrice,
            'discount_percentage' => !is_null($discountPercentage) ? $discountPercentage . '%' : $discountPercentage,
            'currency' => config('app.currency'),
        ];

        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'category' => $this->category,
            'price' => $price
        ];
    }
}
