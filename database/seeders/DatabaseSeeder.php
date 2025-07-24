<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Мир Фантазий',
            'author' => 'Иван Петров',
            'description' => 'Увлекательное путешествие по мирам магии и чудес.',
            'category' => 'Фантастика',
            'cover_image' => 'covers/fantasy.jpg',
        ]);

        Book::create([
            'title' => 'Детектив в тени',
            'author' => 'Анна Смирнова',
            'description' => 'Расследование, которое перевернёт ваше представление о правде.',
            'category' => 'Детектив',
            'cover_image' => 'covers/detective.jpg',
        ]);

        Book::create([
            'title' => 'История древнего мира',
            'author' => 'Сергей Иванов',
            'description' => 'Научный труд об античности и происхождении цивилизации.',
            'category' => 'История',
            'cover_image' => 'covers/history.jpg',
        ]);
    }
}