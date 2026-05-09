<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'blog_2026_1');

    $select_roles_query = "SELECT * FROM roles";

    $roles_result = mysqli_query($connection, $select_roles_query);
    $all_roles = mysqli_fetch_all($roles_result);

    if(isset($_POST['role']) && !empty($_POST['role'])) {
        $role = $_POST['role'];

        $insert_role_query = "INSERT INTO roles (role) VALUES ('$role')";
        if(mysqli_query($connection, $insert_role_query)) {
            echo "Successfully added $role";
        } else {
            die("Error while adding $role" . mysqli_connect_error());
        }
    }
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>ROLE</th>
        <th>CREATED_AT</th>
        <th>UPDATED_AT</th>
        <th>DELETED_AT</th>
    </tr>

    <?php foreach($all_roles as $row) {?>
        <tr>
            <th> <?php echo $row[0] ?> </th>
            <th> <?php echo $row[1] ?> </th>
            <th> <?php echo $row[2] ?> </th>
            <th> <?php echo $row[3] ?> </th>
            <th> <?php echo $row[4] ?> </th>
        </tr>
    <?php } ?>
</table>

<form method="post" style="margin-top: 10px;">
    add role:
    <input type="text" name="role">
    <br><br>
    <button type="submit">submit</button>
</form>