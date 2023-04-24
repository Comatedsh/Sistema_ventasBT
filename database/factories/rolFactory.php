<?php

namespace Database\Factories;

use App\Models\rol;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rol>
 */
class rolFactory extends Factory
{

    protected $model = rol::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_rol'=>$this->faker->sentence()
        ];
    }
}
