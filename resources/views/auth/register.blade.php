<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 420px;">

    <h1 class="h3 fw-bold text-center mb-4">Register</h1>

    <div class="card shadow-sm">
        <div class="card-body p-4">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input
                        type="text"
                        name="name"
                        required
                        class="form-control"
                    >
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        required
                        class="form-control"
                    >
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="form-control"
                    >
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        required
                        class="form-control"
                    >
                </div>

                <!-- Submit -->
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">
                        Register
                    </button>
                </div>

            </form>

            <!-- Link -->
            <div class="text-center mt-3">
                <a href="/login">Already registered? Login</a>
            </div>

        </div>
    </div>

    <div class="text-center mt-3">
        <a href="/">← Back to Home</a>
    </div>

</div>

</body>
</html>
