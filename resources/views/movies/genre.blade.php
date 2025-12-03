<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genres</title>
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

    <h1>Movie genres</h1>
        {{-- Display all movies sorted by genre --}}
        @foreach ($singleMovieByGenre as $movie)
        <div>
            <p>{{ $movie->title }} ({{ $movie->genre}})</p>
        </div>
        @endforeach

    <br><br>
    <a href="/movies/">Back to index</a>

</body>
</html>