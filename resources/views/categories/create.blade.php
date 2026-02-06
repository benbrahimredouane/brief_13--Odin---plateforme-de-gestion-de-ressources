<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
        <!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                Odin
            </a>
            <div class="d-flex gap-2">
                <a href="/dashboard" class="btn btn-primary">dashboard</a>
                <a href="{{route('categories.index')}}" class="btn btn-outline-dark">
                    categories
                </a>
                <a href="/links" class="btn btn-outline-dark">
                    links
                </a>
                <a href="/tags" class="btn btn-outline-dark">
                    tags
                </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <h1>Create New categorie</h1>

    <form method="POST" action="{{ route('categories.store') }}" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Categories Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                required
                value="{{ old('name') }}"
            >
        </div>

        

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>

</body>
</html>