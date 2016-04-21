<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function createFromTitleAndAuthorAndGenre($title, $author, $genre)
    {
        $book = new self([
            'title' => $title,
            'author' => $author,
            'genre' => $genre
        ]);

        $book->save();
    }
}
