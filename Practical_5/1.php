<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_POST['send_button'])) {
        $size = 1000000;
        $extension = pathinfo($_FILES['file']['name'])['extension'];

        if(($extension == "png" || $extension == "jpg" || $extension == "gif") && $_FILES['file']['size'] <= $size) {
            move_uploaded_file($_FILES['file']['tmp_name'], "files/".$_FILES['file']['name']);
        } else {
            echo "<br>";
            echo "please upload a .png .jpg or .gif.";
            echo "<br>";
        }
    }
?>
<style>
    form{
        border: solid 1px black;
        width: 500px;
        padding: 20px;
        margin: 10px auto;
    }
</style>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".png, .jpg, .gif">
        <br><br>
        <button name="send_button">Upload</button>
    </form>
</body>
</html>