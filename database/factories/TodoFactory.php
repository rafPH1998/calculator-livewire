<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    public function definition()
    {
        return [
            'checked' => $this->faker->boolean,
            'title'   => $this->faker->sentence,
        ];
    }
}
