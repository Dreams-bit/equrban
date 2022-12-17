<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kariah>
 */
class KariahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Kariah::class;
    
    public function definition()
    {
        return [
            'id' => $this->faker->unique(),
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->email,
        ];
    }
}
