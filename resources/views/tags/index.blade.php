<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
    <!-- Bootstrap CDN for quick styling (optional but helpful) -->
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

    <h1>Tags</h1>

    <a href="{{route('tags.create')}}" class="btn btn-primary mb-3">Add New Tag</a>
    <a href="/dashboard" class="btn btn-primary mb-3">Back to dashboard</a>

    @if ($tags->isEmpty())
    <p>No Tags yet.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td class="d-flex gap-2">
                    <a class="btn btn-warning" href="{{route('tags.edit',$tag->id)}}">edit</a>
                    <form action="{{route('tags.destroy',$tag->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete</button>

                    </form>
                </td>
         
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</body>

</html>