<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\Floor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Floor>
 */
class FloorFactory extends Factory
{
    protected $model = Floor::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->buildingNumber(),
            'label' => $this->faker->company(),
            'description' => $this->faker->realText(),
            'building_id' => Building::factory(),
        ];

    }
}
