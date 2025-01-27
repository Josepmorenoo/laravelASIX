<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'published_year' => $this->faker->year,
            'summary' => $this->faker->paragraph,
            'genre' => $this->faker->randomElement(['Fiction', 'Non-Fiction', 'Sci-Fi', 'Fantasy']),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
