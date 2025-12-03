<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genres</title>
</head>
<body>
    
    <ul>

        {{-- Display all movies sorted by genre --}}
        @foreach ($singleMovieByGenre as $movie)
        <li>{{ $movieByGenre->title }}</li>
        <li>{{ $movieByGenre->genre}}</li>
    </ul>

    <br><br>
    <a href="/movies/index">Back to index</a>

</body>
</html>