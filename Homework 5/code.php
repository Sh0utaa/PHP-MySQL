<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_POST['f-submit'])) {
        $file = $_POST['file'];

        $handle = fopen("id.txt", 'r');
        $id = fread($handle, filesize("id.txt"));
        fclose($handle);

        $file = $id . "_" . date("d-m-Y") . "_" . $file;

        $handle = fopen("id.txt", "w");
        $id = $id + 1;
        fwrite($handle, $id);
        fclose($handle);

        $dir = "files/".$file.".txt";
        fopen($dir, 'w');
    }

    if(isset($_POST['f-delete'])) {
        $file = $_POST['file'];
        $dir = "files/".$file;

        if(file_exists($dir) && is_file($dir)) {
            unlink($dir);
        }
    }
?>
<style>
    body {
        display: flex;
    }
</style>
<body>
    <form method="post">
        file name:
        <br>
        <input type="text" name="file">
        <br><br>
        <button type="submit" name="f-submit">upload</button>
    </form>

    <form method="post">
        <label for="file">files:</label>
        <select name="file" id="">
            <?php 
                $files = scandir("files/") ;
                foreach (array_slice($files, 2) as $file) {
                    echo "<option value={$file}>";
                    echo $file;
                    echo "</option>";
                }
            ?>
        </select>
        <button type="submit" name="f-delete">delete</button>
    </form>

    <?php 
        $dirs = scandir("files/");

        echo "<ul>";
        for($i = 2; $i < count($dirs); $i++) {
            echo "<li>";
            echo $dirs[$i];
            echo "</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>