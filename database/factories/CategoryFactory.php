<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
		// protected $model = Category::class;

		protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
						// 'slug' =>	Str::slug('name')dssd
        ];
    }
}
