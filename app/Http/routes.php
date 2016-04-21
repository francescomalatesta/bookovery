<?php

$app->get('books', function(\Illuminate\Http\Request $request) use ($app) {
    $books = \App\Book::query();

    if($request->has('author')) {
        $author = $request->get('author');
        $books->where('author', 'LIKE', "%$author%");
    }

    if($request->has('genre')) {
        $genre = $request->get('genre');
        $books->where('genre', 'LIKE', "%$genre%");
    }

    return $books->get();
});

$app->get('/', function () use ($app) {
    return 'Hello World!';
});
