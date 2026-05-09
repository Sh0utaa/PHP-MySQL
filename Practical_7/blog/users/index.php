<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'blog_2026_1');

    $users_result = mysqli_query($conn, "SELECT * FROM users");

    $roles_result = mysqli_query($conn, "SELECT id, role FROM roles");

    $users = mysqli_fetch_all($users_result);
    $roles = mysqli_fetch_all($roles_result);

    if(isset($_POST['f-submit'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role_id = $_POST['role'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];


        $insert_query = "INSERT INTO users 
        (role_id, email, password, name, lastname, mobile, address) 
        VALUES 
        ('$role_id', '$email', '$password', '$name', '$lastname', '$phone_number', '$address')";

        if($insert_result = mysqli_query($conn, $insert_query)) {
            echo "successfully added user!";
        } else {
            echo "error while adding user: " . mysqli_error($conn);
        }
    }
?>


<table border="1">
    <tr>
        <th>ID</th>
        <th>ROLE_ID</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>NAME</th>
        <th>LASTNAMAE</th>
        <th>NUMBER</th>
        <th>ADDRESS</th>
        <th>CREATED_AT</th>
        <th>UPDATED_AT</th>
        <th>DELETED_AT</th>
    </tr>

    <?php foreach($users as $user){?>
        <tr>
            <th><?php echo $user[0] ?></th>
            <th><?php echo $user[1] ?></th>
            <th><?php echo $user[2] ?></th>
            <th><?php echo $user[3] ?></th>
            <th><?php echo $user[4] ?></th>
            <th><?php echo $user[5] ?></th>
            <th><?php echo $user[6] ?></th>
            <th><?php echo $user[7] ?></th>
            <th><?php echo $user[8] ?></th>
            <th><?php echo $user[9] ?></th>
            <th><?php echo $user[10] ?></th>
        </tr>
    <?php } ?>
</table>

<style>
    form {
        width: 250px;
        margin: auto;
        border: solid black 1px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
    }
</style>

<form method="post">
    <h3>add user form</h3>
    name: <input type="text" name="name">
    <br>
    lastname: <input type="text" name="lastname">
    <br>
    password: <input type="password" name="password">
    <br> 
    email: <input type="email" name="email">
    <br>
    <label for="roles">chose a role:</label>

    <select name="role" > 
        <?php 
            foreach($roles as $role) {
                echo "<option value=$role[0]>$role[1]</option>";
            }  
        ?>
    </select>
    <br>
    phone number: <input type="number" name="phone_number" id="">
    <br>
    address: <input type="text" name="address" id="">
    <br>
    <button type="submit" name="f-submit">submit</button>
</form>