<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
</head>
<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'blog_2026_1');
    
    $posts_result = mysqli_query($conn, "SELECT * FROM posts");
    $user_id_result = mysqli_query($conn, "SELECT id, name FROM users");

    $posts = mysqli_fetch_all($posts_result);
    $users = mysqli_fetch_all($user_id_result);

    if(isset($_POST['f-submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $user_id = $_POST['user_id'];

        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        $query = "INSERT INTO posts (title, content, user_id) 
        VALUES ('$title', '$content', '$user_id')";
        mysqli_query($conn, $query);
    }
?>
<body>
   <table border="1">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>CONTENT</th>
        <th>CREATED_AT</th>
        <th>UPDATED_AT</th>
        <th>DELETED_AT</th>
        <th>USER_ID</th>
    </tr>
   <?php foreach($posts as $post) {?>
    <tr>
        <th><?php echo $post[0]?></th>
        <th><?php echo $post[1]?></th>
        <th><?php echo $post[2]?></th>
        <th><?php echo $post[3]?></th>
        <th><?php echo $post[4]?></th>
        <th><?php echo $post[5]?></th>
        <th><?php echo $post[6]?></th>
    </tr>
   <?php } ?>
   </table> 


    <form method="post">
        <h3>add a post</h3>
        title: <input type="text" name="title">
        <br>
        content: <textarea name="content" ></textarea>
        <br>
        <label for="user_id">user</label>
        <select name="user_id" id="">
            <?php 
                foreach($users as $user) {
                    echo "<option value=$user[0]>$user[1]</option>";
                } 
            ?>
        </select>
        <br>
        <button type="submit" name="f-submit">submit</button>
    </form>
</body>
</html>