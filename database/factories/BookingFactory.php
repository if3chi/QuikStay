<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'guests' => $this->faker->numberBetween(
                int1: 1,
                int2: 8
            ),
            'cost' => $this->faker->numberBetween(
                int1: 1_000,
                int2: 10_000
            ),
            'room_id' => Room::factory(),
            'user_id' => User::factory(),
            'starts_at' => $start = Carbon::parse(time: $this->faker->dateTimeThisMonth()),
            'ends_at' => $start->addDays(
                value: $this->faker->numberBetween(
                    int1: 1,
                    int2: 7
                )),
        ];
    }
}
