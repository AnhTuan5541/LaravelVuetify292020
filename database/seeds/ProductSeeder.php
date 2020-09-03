<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Product::truncate();

        foreach(range(1, 100) as $i) {
            $product = Product::create([
                'name' => $faker->company,
                'price' => rand(100000, 1000000),
            ]);
        }
    }
}
