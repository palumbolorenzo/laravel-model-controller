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
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                <h2 class="text-white">Movies</h2>
                </a>
            </div>
        </nav>
    </header>
    <main>
       <div class="cards-container row">
       @foreach ($movies as $movie)
        <div class="card cols-3 bg-dark" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-white">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Original Title: {{ $movie->original_title }}</h6>
                <p class="card-text text-white">Nationality: {{ $movie->nationality }}</p>
                <p class="card-text text-white">Movie date: {{ $movie->date }}</p>
                <p class="card-text text-white">Imdb: {{ $movie->vote }}</p>
                <a href="#" class="card-link">More info</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        @endforeach
       </div>
    </main>
</body>
</html>
