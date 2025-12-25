<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planet->name }}</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>

    <h1>{{ $planet->name }} - {{ $planet->solarSystem->name }}</h1>
    <p>{{ $planet->description }}</p>
    <p>{{ $planet->size_in_km }} km</p>

    <br>

    <a href="{{ route('planets.index') }}">Back to the list</a>
    
</body>
</html>