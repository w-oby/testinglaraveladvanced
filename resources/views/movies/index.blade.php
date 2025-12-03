<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies Index</title>
    <style>
        body {

            font-family: Verdana, Geneva, Tahoma, sans-serif

        }
    </style>
</head>
<body>
    <h1>Movies overview</h1>
    <ul>
        <li><a href="/movies/rating">Movies by rating</a></li>
        <li><a href="/movies/genre">Movies by genres</a></li>
    </ul>

<p>You could also search movies based on the url, such as <a href="{{ url('/movies/show/Lion') }}">{{ url('/movies/show/Lion') }}</a></p>

</body>
</html>