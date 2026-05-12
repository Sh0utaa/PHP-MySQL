<?php 
    function createRole($conn, $role) {
        mysqli_query($conn, "INSERT INTO roles (role) VALUES ('{$role}')");
    }

    function getAllRoles($conn) {
        $res = mysqli_query($conn, "SELECT * FROM roles");
        return mysqli_fetch_all($res);
    }

    function getRoleById($conn, $id) {
        $res = mysqli_query($conn, "SELECT * FROM roles WHERE id = '{$id}'");
        return mysqli_fetch_all($res);
    }

    function updateRole($conn, $role) {
        $date = date('Y-m-d');
        $res = mysqli_query($conn, "UPDATE roles SET 
            role = '{$role['role']}',
            updated_at = '{$date}'
            WHERE id='{$role['id']}'");

        if(!$res) {
            die("Query failed: " . mysqli_error($conn));
        }
    }

    function deleteRole($conn, $id) {
        $date = date('Y-m-d');
        mysqli_query($conn, "UPDATE roles SET deleted_at='{$date}' WHERE id='{$id}'");
    }
?>