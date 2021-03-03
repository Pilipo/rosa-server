<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class IngredientTableSeeder extends Seeder
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
        // Dairy
        foreach (range(1, 50) as $idx) {
            DB::table('ingredients')->insert([
                'name' => $faker->dairyName() . '-' . $faker->word() . $faker->word(),
                'amount' => rand(3, 48) . ' servings',
                'recipe_id' => $idx,
                'section_id' => 0,
            ]);
        }
        // Veg
        foreach (range(1, 50) as $idx) {
            DB::table('ingredients')->insert([
                'name' => $faker->vegetableName() . '-' . $faker->word() . $faker->word(),
                'amount' => rand(3, 48) . ' servings',
                'recipe_id' => $idx,
                'section_id' => 1,
            ]);
        }
        // Meat
        foreach (range(1, 50) as $idx) {
            DB::table('ingredients')->insert([
                'name' => $faker->meatName() . '-' . $faker->word() . $faker->word(),
                'amount' => rand(3, 48) . ' servings',
                'recipe_id' => $idx,
                'section_id' => 2,
            ]);
        }
        // Fruit
        foreach (range(1, 50) as $idx) {
            DB::table('ingredients')->insert([
                'name' => $faker->fruitName() . '-' . $faker->word() . $faker->word(),
                'amount' => rand(3, 48) . ' servings',
                'recipe_id' => $idx,
                'section_id' => 3,
            ]);
        }
    }
}
