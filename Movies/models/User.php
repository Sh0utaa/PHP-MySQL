<?php 
    function register_user($conn, $username, $email, $birthdate, $password) {
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        mysqli_query($conn, $query);
        $user_id = mysqli_insert_id($conn);

        $query = "INSERT INTO user_profiles (user_id, role_id, username, birthdate) VALUES ('$user_id', 2, '$username', '$birthdate')";
        mysqli_query($conn, $query);
    }

    function login_user($conn, $email, $password) {

    }

    function is_unique($conn, $table, $column, $data) {
        $query = "SELECT 1 FROM $table WHERE $column = '$data' LIMIT 1";
        $query_res = mysqli_query($conn, $query);
        
        if(empty(mysqli_fetch_all($query_res))) {
            return true;
        } 

        return false;
    }
?>