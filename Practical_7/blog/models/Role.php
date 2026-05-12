<?php 
    function getAllRoles($conn) {
        $res = mysqli_query($conn, "SELECT id, role FROM roles");
        return mysqli_fetch_all($res);
    }
?>