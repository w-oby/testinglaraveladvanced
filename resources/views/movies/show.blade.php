<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie->title }} details</title>
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
    
    <h1>Movie details</h1>

        {{-- Display selected movie details --}}
        <div>
            <h4>Title</h4>
            <p>{{ $movie->title }}</p>
        </div>

        <div>
            <h4>Genre</h4>
            <p>{{ $movie->genre }}</p>
        </div>

        <div>
            <h4>Release year</h4>
            <p>{{ $movie->release_year }}</p>
        </div>

        <div>
            <h4>Rating</h4>
            <p>{{ $movie->rating }}</p>
        </div>

        <div>
            <h4>Description</h4>
            <p>{{ $movie->description }}</p>
        </div>

    <br><br>
    <a href="/movies/">Back to index</a>

</body>
</html>