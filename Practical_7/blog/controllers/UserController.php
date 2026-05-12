<?php 
    require_once __DIR__ . '/../models/User.php';
    require_once __DIR__ . '/../config/db.php';

    if(isset($_POST['add'])) {
        createUser($conn, $_POST);
        header("location: users.php");
    }

    if(isset($_POST['update'])) {
        updateUser($conn, $_POST);
        header("location: users.php");
    }

    if(isset($_POST['delete'])) {
        deleteUser($conn, $_POST['delete_id']);
        header("location: users.php");
    }

    $editUser = null;
    if(isset($_GET['id'])) {
        $editUser = getUserById($conn, $_GET['id']);
    }
?>