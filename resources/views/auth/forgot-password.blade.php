<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forgot Password</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 450px;">

    <h1 class="h3 fw-bold text-center mb-4">Forgot Password</h1>

    <div class="card shadow-sm">
        <div class="card-body p-4">

            <p class="text-muted mb-4">
                Enter your email address and we will send you a password reset link.
            </p>

            <!-- Success Message -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

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

                <!-- Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Email Password Reset Link
                    </button>
                </div>
            </form>

            <!-- Back -->
            <div class="text-center mt-3">
                <a href="/login">← Back to Login</a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
