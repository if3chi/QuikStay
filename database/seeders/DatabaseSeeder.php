<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Floor;
use App\Models\Role;
use App\Models\Room;
use App\Models\SupportDocument;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->callOnce(DefaultRolesSeeder::class);

        if (app()->environment() !== 'production') {
            $user = User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

            $user->roles()->save(Role::query()->where('name', 'admin')->first());
        }

        SupportDocument::factory()->count(10)->create();

        $building = Building::factory()->create();

        Floor::factory()->for($building)->count(4)->create()->each(
            callback: function (Floor $floor): void {
                Room::factory()->for($floor)->count(20)->create();
            },
        );
    }
}
