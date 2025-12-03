<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Rating</title>
    <style>
        body {

            font-family: Verdana, Geneva, Tahoma, sans-serif

        }

        div {
            margin-bottom: 2rem; 
        }

        div h4, p {

            margin: 0;

        }
    </style>
</head>
<body>
    <h1>Movies by rating</h1>
    <h4>All movies are sorted by rating from highest to lowest</h4>

    @foreach ($allMovies as $movie)
    <div>
        <p>{{ $movie->title}}</p>
        <p>Rating: {{ $movie->rating }}/10</p>
    </div>
    @endforeach

    <br><br>
    <a href="/movies/">Back to index</a>

</body>
</html>