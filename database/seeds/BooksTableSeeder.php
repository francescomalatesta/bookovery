<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::createFromTitleAndAuthorAndGenre(
            'Five Weeks in a Balloon',
            'Jules Verne',
            'Adventure'
        );

        Book::createFromTitleAndAuthorAndGenre(
            'The Mysterious Island',
            'Jules Verne',
            'Adventure'
        );

        Book::createFromTitleAndAuthorAndGenre(
            'Twenty Thousand Leagues Under the Sea',
            'Jules Verne',
            'Adventure'
        );

        Book::createFromTitleAndAuthorAndGenre(
            'Michael Strogoff',
            'Jules Verne',
            'Adventure'
        );

        Book::createFromTitleAndAuthorAndGenre(
            'The Devil and Miss Prym',
            'Paulo Coelho',
            'Novel'
        );

        Book::createFromTitleAndAuthorAndGenre(
            'The Alchemist',
            'Paulo Coelho',
            'Novel'
        );
    }
}
