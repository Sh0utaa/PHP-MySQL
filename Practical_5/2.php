<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        border: solid 1px black;
        width: 33%;
        padding: 20px;
        margin: 10px auto;
    }

    .container {
        display: flex;
    }
</style>
<?php 
    if(isset($_POST['f-upload'])) {
        $max_size = 5242880;

        if($_FILES['file']['size'] <= $max_size) {
            move_uploaded_file($_FILES['file']['tmp_name'], "files/".$_FILES['file']['name']);
            echo "file " . $_FILES['file']['name'] . " uploaded!";
        }
    }

    if(isset($_POST['f-delete'])) {
        $file = $_POST['file'];

        if(file_exists("files/".$file) && is_file("files/".$file)) {
            unlink("files/".$file);
            echo "file {$file} deleted";
        } else {
            echo "file doesn't exist";
        }
    }
?>
<body>
    <?php 
        $dirs = scandir("./files");
        echo "<h3>files: </h3>";
        echo "<ul>";
        for ($i=2; $i < count($dirs); $i++) { 
            echo "<li> {$dirs[$i]} <a href='files/{$dirs[$i]}'>Download</a></li>";
        }
        echo "</ul>";
    ?>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="">
            <br><br>
            <button type="submit" name="f-upload">upload file</button>
        </form>    

        <form method="post" enctype="multipart/form-data">
            <label for="file">files</label>
            <select name="file" id="">
                <?php 
                    for ($i=2; $i < count($dirs); $i++) { 
                        echo "<option value=" . $dirs[$i] ."> " . $dirs[$i] . " </option>";
                    } 
                ?>
            </select>
            <br><br>
            <button type="submit" name="f-delete">delete file</button>
        </form>
    </div>

</body>
</html>