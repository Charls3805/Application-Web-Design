<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Superhero</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1>Superhero Details</h1>

    <div class="card" style="max-width: 32rem;">
        <img src="{{ $superhero->photo_url }}" class="card-img-top" alt="{{ $superhero->hero_name }}">
        <div class="card-body">
            <h3 class="card-title">{{ $superhero->hero_name }}</h3>
            <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
            <p><strong>Additional Information:</strong> {{ $superhero->description }}</p>
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>

</body>
</html>