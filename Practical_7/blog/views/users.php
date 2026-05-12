<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<?php 
    require_once __DIR__ . '/../controllers/UserController.php';
    require_once __DIR__ . '/../models/User.php';
    require_once __DIR__ . '/../models/Role.php';
    require_once __DIR__ . '/../config/db.php';

    $users = getAllUsers($conn);
    $roles = getAllRoles($conn);
?>
<style>
    .form {
        width: 300px;
        padding: 10px;
        border: 1px solid black;
    }
</style>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Role_id</th>
            <th>Email</th>
            <th>Password</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Drop</th>
        </tr>
        <?php foreach($users as $user) {?>
            <tr>
                <th><?php echo $user[0] ?></th>
                <th><?php echo $user[1] ?></th>
                <th><?php echo $user[2] ?></th>
                <th><?php echo $user[3] ?></th>
                <th><?php echo $user[4] ?></th>
                <th><?php echo $user[5] ?></th>
                <th><?php echo $user[6] ?></th>
                <th><?php echo $user[7] ?></th>
                <th>
                    <a href="?id=<?= $user[0] ?>">edit</a>
                </th>
                <th>
                    <form method="post">
                        <input type="hidden" name="delete_id" value="<?= $user[0] ?>">
                        <button type="submit" name="delete">drop</button>
                    </form>
                </th>
            </tr>
        <?php } ?>
    </table> 

    <?php if($editUser) { ?>
        <form method="post" class="form">
            <h3>edit form</h3>
            <label for="role_id">roles:</label>
            <select name="role_id">
                <?php foreach($roles as $role) { ?>
                    <option value="<?= $role[0] ?>"><?php echo $role[1] ?></option>
                <?php } ?>
            </select>

            <input type="hidden" name="id" value="<?= $editUser[0][0] ?>">
            <br><br>
            name: <input type="text" name="name" value="<?= $editUser[0][4] ?>">
            <br><br>
            lastname: <input type="text" name="lastname" value="<?= $editUser[0][5] ?>">
            <br><br>
            password: <input type="text" name="password" value="<?= $editUser[0][3] ?>">
            <br><br>
            email: <input type="email" name="email" value="<?= $editUser[0][2] ?>">
            <br><br>
            mobile: <input type="text" name="mobile" value="<?= $editUser[0][6] ?>">
            <br><br>
            address: <input type="address" name="address" value="<?= $editUser[0][7] ?>">

            <br><br>
            <button type="submit" name="update">submit</button>
        </form>
    <?php } ?>

</body>
</html>