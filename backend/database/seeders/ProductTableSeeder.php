<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::truncate();
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            \App\Models\Product::create([
                'name' => $faker->name,
                'description' => $faker->sentence,
                'price' => $faker->randomNumber(2),
                'category' => $faker->word,
                'imagename' => $faker->imageUrl(640, 480),
            ]);
        }
    }
}
