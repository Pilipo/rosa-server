<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        foreach (range(1, 50) as $idx) {
            DB::table('recipes')->insert([
                'name' => $faker->foodName() . '-' . $faker->word(),
                'servings' => rand(3, 48) . ' servings',
                'user_id' => rand(0, 400)
            ]);
        }
    }
}
