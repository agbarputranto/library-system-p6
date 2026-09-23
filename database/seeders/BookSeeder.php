<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Wuthering Heights',
            'author' => 'Emily Brontë',
            'year' => 1847,
            'stock' => 7,
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'year' => 1949,
            'stock' => 9,
        ]);

        Book::create([
            'title' => 'Sapiens',
            'author' => 'Yuval Noah Harari',
            'year' => 2011,
            'stock' => 6,
        ]);
    }
}