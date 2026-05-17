<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/forms.css">
</head>
<?php 
    require_once __DIR__ . '/../controllers/UserController.php';
?>
<body>
    <nav>
        <a href="../" class="brand">Movies</a>
        <div class="nav-links">
            <a href="./login.php" class="btn-login">Login</a>
        </div>
    </nav>

    <div class="form-wrapper">
        <div class="form-card">
            <h2>Create account</h2>
            <p class="form-sub">Join us today</p>

            <form method="post">
                <div class="field-row">
                    <div class="field">
                        <label for="username">User name</label>
                        <input type="text" id="name" name="username" placeholder="Giorgi" required>
                    </div>
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="field">
                    <label for="birth_date">Date of birth</label>
                    <input type="date" id="birthdate" name="birthdate" required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" name="f-register" class="btn-submit" id="btn-register">Create account</button>
            </form>

            <p class="form-footer">Already have an account? <a href="./login.php">Sign in</a></p>
        </div>
    </div>
    <!-- <form action="" method="post">
        username: <input type="text" name="username" id="">
        <br><br>
        email: <input type="email" name="email" id="">
        <br><br>
        date of birth: <input type="date" name="birthdate" id="">
        <br><br>
        password: <input type="text" name="password" id="">
        <br><br>
        <button type="submit" name="f-register">submit</button>
    </form> -->
</body>
</html>