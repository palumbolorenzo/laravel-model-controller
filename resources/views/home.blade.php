<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Home</h1>
    </header>
    <main>
        <ul>
            @foreach ($movies as $movie)
            <li class="card">Title: {{ $movie->title }} - Original Title: {{ $movie->original_title }} - Nationality: {{ $movie->nationality }} - Movie date: {{ $movie->date }} - Imdb: {{ $movie->vote }}</li>
            @endforeach
        </ul>
    </main>
</body>
</html>
