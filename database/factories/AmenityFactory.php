<?php

namespace Database\Factories;

use App\Models\Amenity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amenity>
 */
final class AmenityFactory extends Factory
{
    protected $model = Amenity::class;

    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->randomElement([
                'wifi',
                'sea-view',
                'air-con',
                'mini-fridge',
                'safe-box',
            ]),
            'label' => Str::title($name),
            'icon' => null,
            'description' => $this->faker->realText(),
        ];
    }
}
