<?php 
    function createUser($conn, $user) {
        mysqli_query($conn, 
        "INSERT INTO users 
        (role_id, email, password, name, lastname, mobile, address) 
        VALUES 
        ({$user['role_id']}, {$user['email']}, {$user['password']}, 
        {$user['name']}, {$user['lastname']}, {$user['mobile']}, {$user['address']}");
    }

    function getUserById($conn, $id) {
        $res = mysqli_query($conn, "SELECT * FROM users WHERE id = $id ");
        return mysqli_fetch_all($res);
    }

    function getAllUsers($conn) {
        $res = mysqli_query($conn, "SELECT * FROM users");
        return mysqli_fetch_all($res); 
    }

    function updateUser($conn, $user) {
        $res = mysqli_query($conn, "UPDATE users SET 
            role_id  = '{$user['role_id']}',
            name     = '{$user['name']}',
            lastname = '{$user['lastname']}',
            password = '{$user['password']}',
            email    = '{$user['email']}',
            mobile   = '{$user['mobile']}',
            address  = '{$user['address']}'
            WHERE id = '{$user['id']}'
        "); 
        if(!$res) {
            die("Query failed: " . mysqli_error($conn));
        }
    }

    function deleteUser($conn, $id) {
        mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    }
?>