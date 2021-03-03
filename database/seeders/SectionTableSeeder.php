<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionNames = [
            'Dairy',
            'Vegetable',
            'Meat',
            'Fruit'
        ];

        foreach ($sectionNames as $sectionName) {
            DB::table('sections')->insert([
                'name' => $sectionName,
            ]);
        }
    }
}
