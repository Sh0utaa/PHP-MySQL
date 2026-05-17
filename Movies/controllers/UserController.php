<?php 
    require_once __DIR__ . "/../models/User.php";
    require_once __DIR__ . "/../config/db.php";

    if(isset($_POST['f-register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $birthdate = $_POST['birthdate'];

        // validation
        if(!is_unique($conn, 'users', 'email', $email)) {
            die('Email already in use');    
        } else if(!is_unique($conn, 'user_profiles', 'username', $username)) {
            die('Username already in use');
        } else if(!str_contains($email, "@")) {
            die('Enter a valid email');
        } else if(strlen($username) > 50) {
            die('Username length must be less than 50 syllables');
        } else if(strlen($password) < 8) {
            die("Passwords needs to be at least 8 syllables");
        } else if(!preg_match('/[!@#$%^&*]/', $password)) {
            die("Password must contain at least one of these symbols !@#$%^&*");
        } else {
            register_user($conn, $username, $email, $birthdate, $password);
            header("location: /PHP-MySQL/Movies");
        }
    }
?>