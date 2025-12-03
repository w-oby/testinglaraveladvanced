<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie->title }} details</title>
</head>
<body>
    
    <h1>Movie details</h1>

    <ul>

        {{-- Display selected movie details (title, genre, release year, rating and description) --}}
        @foreach ($singleNovie as $movie)

        <li>{{ $movie->title }}</li>
        <li>{{ $movie->genre }}</li>
        <li>{{ $movie->release_year }}</li>
        <li>{{ $movie->rating }}</li>
        <li>{{ $movie->description }}</li>

    </ul>

    <br><br>
    <a href="/movies/index">Back to index</a>

</body>
</html>