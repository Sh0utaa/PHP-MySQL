<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/forms.css">
</head>
<body>
    <nav>
        <a href="../" class="brand">Movies</a>
        <div class="nav-links">
            <a href="./register.php" class="btn-login">Register</a>
        </div>
    </nav>

    <div class="form-wrapper">
        <div class="form-card">
            <h2>Welcome back</h2>
            <p class="form-sub">Sign in to your account</p>

            <form method="post">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>
                <button type="submit" name="f-login" class="btn-submit">Sign in</button>
            </form>

            <p class="form-footer">Don't have an account? <a href="./register.php">Register</a></p>
        </div>
    </div>
</body>
</html>