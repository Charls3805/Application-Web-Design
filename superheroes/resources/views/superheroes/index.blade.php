<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1 class="mb-4">Superheroes List</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('superheroes.create') }}" class="btn btn-primary mb-3">Add New Superhero</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Real Name</th>
                <th>Hero Name</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($superheroes as $superhero)
                <tr>
                    <td>{{ $superhero->id }}</td>
                    <td>{{ $superhero->real_name }}</td>
                    <td>{{ $superhero->hero_name }}</td>
                    <td>
                        <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->hero_name }}" width="100">
                    </td>
                    <td>
                        <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No superheroes registered.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>