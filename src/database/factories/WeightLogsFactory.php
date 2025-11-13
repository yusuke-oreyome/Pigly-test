<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => fake()->id(),
            'user_id' => fake()->user_id(),
            'date' => fake()->date(),
            'weight' => fake()->weight(),
            'calories' => fake()->calories(),
            'exercise_time' => fake()->exercise_time(),
            'exercise_content' => fake()->exercise_content(),
        ];
    }
}
