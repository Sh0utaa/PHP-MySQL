<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $content = "";
    $filename = "";

    // create txt files
    if(isset($_POST['f-create'])) {
        $file = $_POST['file'];

        $dir = "files/".$file.".txt";

        if(!is_file($dir) && !file_exists($dir)) {
            fopen($dir, "w");
        } else {
            echo "file {$file} already exists";
        }
    }

    // load contents from a txt file into $content variable
    if(isset($_POST['f-load'])) {
        $file = $_POST['file'];

        $dir = "files/".$file;

        if(is_file($dir) && file_exists($dir)) {
            $filename = $file;

            $handle = fopen($dir, "r");
            $filesize = filesize($dir);

            $filesize == 0 ? $content = "" : $content = fread($handle, $filesize);

            fclose($handle);
        } else {
            echo "file {$file} doesn't exist or is not valid";
        }
    }

    // save changes made to loaded txt file
    if(isset($_POST['f-save'])) {
        $user_content = $_POST['content'];
        $file_name = $_POST['f-name'];
        $dir = "files/".$file_name;

        if(is_file($dir) && file_exists($dir)) {
            $handle = fopen($dir, "w");
            fwrite($handle, $user_content);

            fclose($handle);
        } else {
            echo "error: {$file_name}";
        }
    }
?>
<body style="display: flex; justify-content: space-evenly;">
    <div>
        <form method="post">
            create file:
            <input type="text" name="file" id="" accept=".txt">
            <br><br>
            <button type="submit" name="f-create">create file</button>
        </form>
    </div>
    <div>
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
            <br><br>
            <button type="submit" name="f-load">load file</button>
        </form>
    </div>
    <div>
        <form method="post">
            <?php echo $filename ?> content:
            <input type="hidden" name="f-name" value="<?php echo $filename ?>">
            <br>
            <textarea name="content" id="" style="width: 300px; height: 240px;"><?php echo $content ?></textarea>
            <br>
            <button type="submit" name="f-save">save</button>
        </form>
    </div>
</body>
</html>