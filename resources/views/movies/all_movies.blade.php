<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Rating</title>
</head>
<body>
    <h1>Movies ordered from highest rating to lowest</h1>
    <ul>
        @foreach ($allMovies as $movie)
        <li>
            <p>{{ $movie->title}}</p>
            <p>{{ $movie->rating }}</p>
        </li>
    </ul>

    <br><br>
    <a href="/movies/index">Back to index</a>
    
</body>
</html>