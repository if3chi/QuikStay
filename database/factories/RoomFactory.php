<?php

namespace Database\Factories;

use App\Enums\RoomType;
use App\Models\Floor;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
final class RoomFactory extends Factory
{
    protected $model = Room::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->company(),
            'label' => Str::title($name),
            'view' => $this->faker->word(),
            'type' => $this->faker->randomElement([RoomType::cases()]),
            'description' => $this->faker->realText(),
            'persons' => $persons = $this->faker->numberBetween(1, 8),
            'size' => $size = $persons * $this->faker->numberBetween(100, 300),
            'daily_rate' => $daily = $size * 100,
            'weekly_rtae' => $daily * 5,
            'floor_id' => Floor::factory(),
        ];
    }
}
