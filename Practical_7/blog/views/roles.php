<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>
<?php 
    require_once __DIR__ . "/../config/db.php";
    require_once __DIR__ . "/../controllers/RoleController.php";
    require_once __DIR__ . "/../models/Role.php";
    
    $roles = getAllRoles($conn);

?>
<style>
    .form {
        width: 300px;
        padding: 10px;
        border: 1px solid black;
    }

    .form_container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Role</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Deleted_at</th>
            <th>Edit</th>
            <th>Drop</th>
        </tr>
        <?php foreach($roles as $role) { ?>
            <tr>
                <th><?php echo $role[0] ?></th>
                <th><?php echo $role[1] ?></th>
                <th><?php echo $role[2] ?></th>
                <th><?php echo $role[3] ?></th>
                <th><?php echo $role[4] ?></th>
                <th><a href="?id=<?= $role[0] ?>">edit</a></th>
                <th>
                    <form method="post">
                        <input type="hidden" name="id" value="<?= $role[0] ?>">
                        <button type="submit" name="delete" >drop</button>
                    </form>
                </th>
            </tr>
        <?php } ?>
    </table>    

    <?php if($editRole) { ?>
        <h3>Edit role</h3>
        <form method="post" id="form">
            <input type="hidden" name="id" value="<?= $editRole[0][0] ?>">
            role: <input type="text" name="role" value="<?= $editRole[0][1] ?>">
            <br><br>
            <button type="submit" name="update">submit</button>
        </form>
    <?php } ?>

    <form method="post">
        <h3>Add role</h3>
        new role: <input type="text" name="role">
        <button type="submit" name="add">submit</button>
    </form>
</body>
</html>