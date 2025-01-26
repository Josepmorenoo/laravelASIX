<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayersSeeder extends Seeder
{
    public function run()
    {
        Player::factory(10)->create(); // Genera 10 jugadors
    }
}
