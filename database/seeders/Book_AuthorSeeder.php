<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Book_AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book_author = [
            [
                'author_id' => 1,
                'book_id' => 1,
            ],
            [
                'author_id' => 2,
                'book_id' => 3,
            ],
            [
                'author_id' => 3,
                'book_id' => 5,
            ],
            [
                'author_id' => 4,
                'book_id' => 7,
            ],
            [
                'author_id' => 5,
                'book_id' => 9,
            ],
            [
                'author_id' => 10,
                'book_id' => 11,
            ],
            [
                'author_id' => 9,
                'book_id' => 13,
            ],
            [
                'author_id' => 8,
                'book_id' => 15,
            ],
            [
                'author_id' => 7,
                'book_id' => 17,
            ],
            [
                'author_id' => 6,
                'book_id' => 19,
            ],
            [
                'author_id' => 4,
                'book_id' => 21,
            ],
            [
                'author_id' => 2,
                'book_id' => 23,
            ],
            ];
    }
}
