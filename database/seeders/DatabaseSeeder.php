<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Database\Factories\ProductImagesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         Product::factory(30)->create();
         ProductImage::factory(50)->create();




    }
}
