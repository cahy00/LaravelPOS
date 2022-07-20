<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask("Mau Generate berapa Kategori?", 5);
				$this->command->info("{$count} Kategori.");
				$faker = \Faker\Factory::create();

				$category = \App\Models\Category::factory()
									->count($count)
									->create();
    }
}
