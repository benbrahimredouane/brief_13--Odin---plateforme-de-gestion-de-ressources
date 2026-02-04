<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 420px;">

    <h1 class="h3 fw-bold text-center mb-4">Login</h1>

    <div class="card shadow-sm">
        <div class="card-body p-4">

               @if($errors->any())
                <div class="alert alert-danger">
                      <p>{{$errors->first()}}</p>

                </div>
               @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        required
                        class="form-control"
                    >
                </div>

                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="form-control"
                    >
                </div>
            
                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember">
                    <label class="form-check-label">
                        Remember me
                    </label>
                </div>

                
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">
                        Log in
                    </button>
                </div>

            </form>

            
            <div class="text-center mt-3">
                <a href="/forgot-password">Forgot password?</a>
                <br>
                <a href="/register">Create account</a>
            </div>

        </div>
    </div>

    <div class="text-center mt-3">
        <a href="/">← Back to Home</a>
    </div>

</div>

</body>
</html>
