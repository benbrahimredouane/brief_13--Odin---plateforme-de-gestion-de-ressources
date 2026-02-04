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
                My App
            </a>
            <div class="d-flex gap-2">
                <a href="/" class="btn btn-outline-dark">
                    Home
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

        <p class="text-muted">
            This is a simple dashboard page.
            You can add your content later.
        </p>

    </div>




</body>

</html>