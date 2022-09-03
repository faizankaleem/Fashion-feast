<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $orignal_price =  rand(5000,20000);
        $discounted_price = rand(0,1000);
        $current_price = $orignal_price-$discounted_price;
        return [
            'title' => $this->faker->words(5, true),
            'description' => $this->faker->text(),
            'total_stock' => rand(10,50),
            'regular_price' => $orignal_price,
            'discounted_price' => $discounted_price,
            'current_price' => $current_price,
            'sub_category_id' => SubCategory::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,

        ];
    }
}
