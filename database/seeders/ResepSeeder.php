<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reseps')->insert([
            'recipe_name' => 'krabby patty',
            'cooking_time' => 12,
            'id_user' => 1,
            'tag' => 'breakfast',
            'image' => 'google.com',
            'description' => 'krabby patty is a delicious',
            'rating' => 9,
            'ingredients' => '1. Egg
                              2. Tomatoes',
            'steps' => '1. Masukkan Telur, 
                        2. masak'
        ]);
    }
}
