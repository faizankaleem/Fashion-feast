<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->image(storage_path('app/public/uploads/products')),
            'product_id' => Product::inRandomOrder()->first()->id,
        ];
    }
}
