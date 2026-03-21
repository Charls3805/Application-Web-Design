<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Superhero</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1>Create Superhero</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Real Name</label>
            <input type="text" name="real_name" class="form-control" value="{{ old('real_name') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Hero Name</label>
            <input type="text" name="hero_name" class="form-control" value="{{ old('hero_name') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Photo URL</label>
            <input type="text" name="photo_url" class="form-control" value="{{ old('photo_url') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Additional Information</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back</a>
    </form>

</body>
</html>