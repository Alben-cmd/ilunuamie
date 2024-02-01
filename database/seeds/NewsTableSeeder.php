<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

            for ($i = 0; $i < 10; $i++) {
                DB::table('news')->insert([
                    'title' => $faker->sentence,
                    'news' => $faker->paragraph,
                    'status' => $faker->boolean,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
    }
}
