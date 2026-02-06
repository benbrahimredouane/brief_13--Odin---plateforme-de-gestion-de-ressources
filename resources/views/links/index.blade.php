<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>categories</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
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

    <div class="container mt-5" style="max-width: 420px;">

        <h1 class="h3 fw-bold text-center mb-4">Links</h1>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                @if($links->isEmpty())
                <p> no links yet</p>
                @else
                <table border=1>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>URL</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($links as $link)
                        <tr>
                            <td>{{$link->id}}</td>
                            <td>{{$link->name}}</td>
                            <td>{{$link->URL}}</td>
                            <td>
                                <a href="">edit</a>
                                <form action="">
                                    <a href="">delete</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="/dashboard"> Back to Home</a>
        </div>

    </div>

</body>

</html>