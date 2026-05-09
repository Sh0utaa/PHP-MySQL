<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'blog_2026_1');
    
    $posts_result = mysqli_query($conn, "SELECT id, title FROM posts");

    $posts = mysqli_fetch_all($posts_result);

    echo "<pre>";
    print_r($posts);
    echo "</pre>";

?>
<body>
    
</body>
</html>