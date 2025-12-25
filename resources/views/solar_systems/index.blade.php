<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar System index</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('planets.index') }}">See overview of planets</a>
    </nav>
    
    <h1>List of solar systems</h1>
    <ul>
        @foreach ($solar_systems as $solar_system)
        <li>
            <a href="{{ route('solarsystems.show', ['id' => $solar_system->id]) }}">
                {{ $solar_system->name }}
            </a>
        </li>
        @endforeach
    </ul>

</body>
</html>