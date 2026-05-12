<?php 
    require_once __DIR__ . "/../config/db.php";
    require_once __DIR__ . "/../models/Role.php";

    if(isset($_POST['add'])) {
        createRole($conn, $_POST['role']);
        header("location: roles.php");
    }

    if(isset($_POST['update'])) {
        updateRole($conn, $_POST);
        header("location: roles.php");
    }

    if(isset($_POST['delete'])) {
        deleteRole($conn, $_POST['id']);
        header("location: roles.php");
    }

    $editRole = null;
    if(isset($_GET['id'])) {
        $editRole = getRoleById($conn, $_GET['id']);
    }
?>