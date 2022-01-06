<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>Category::factory(),
            'title'=>$this->faker->word(2),
            'firstname'=>$this->faker->firstName(),
            'surname'=>$this->faker->lastName(),
            'price'=>$this->faker->randomNumber(3),
            'pages'=>$this->faker->randomNumber(3)
        ];
    }
}
