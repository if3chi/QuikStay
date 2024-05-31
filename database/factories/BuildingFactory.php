<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    protected $model = Building::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Abuja',
                'Ibom',
                'Akwa',
                'Imo',
            ]),
            'label' => $this->faker->company(),
            'description' => $this->faker->realText(),
        ];
    }
}
