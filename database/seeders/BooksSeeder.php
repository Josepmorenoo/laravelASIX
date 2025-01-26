<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    public function run()
    {
        // Generar 10 llibres ficticis amb els camps definit per la fàbrica
        Book::factory(10)->create();
    }
}
