<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::factory()
            ->count(10)
            ->create();
    }
}
