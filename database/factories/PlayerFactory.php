<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    protected $model = Player::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'position' => $this->faker->randomElement(['Porter', 'Defensa', 'Migcampista', 'Davanter']),
            'age' => $this->faker->numberBetween(18, 40),
            'team' => $this->faker->randomElement([
                'FC Barcelona', 'Real Madrid', 'Manchester United', 'Liverpool', 'Paris Saint-Germain',
                'Bayern Munich', 'Juventus', 'AC Milan', 'Inter Milan', 'Chelsea', 'Arsenal', 'Atletico Madrid'
            ]),
            'country' => $this->faker->randomElement(['Espanya', 'França', 'Alemanya', 'Brasil', 'Argentina', 'Itàlia', 'Anglaterra', 'Portugal', 'Mèxic']) ?: 'Espanya', // Nacionalitat per defecte
        ];
    }



}
