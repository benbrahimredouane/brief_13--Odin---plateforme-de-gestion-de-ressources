<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

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

    <!-- Dashboard Content -->
    <div class="container mt-5">

        <h1 class="fw-bold mb-3">Dashboard</h1>

        <div class="alert alert-success">
            You're logged in!
        </div>

        <p class="text-muted text-centre">
            welcome to odin landmarkbook a platform that allow you to structure your links by categoryes and tags a beutiful experince are waiting for you just go a head trust me broda .
            have a good linky day.
        </p>

    </div>




</body>

</html>