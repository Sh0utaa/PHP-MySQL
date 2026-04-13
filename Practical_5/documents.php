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
        $dir = "files/{$file}.txt";

        if(!file_exists($dir)) {
            $handle = fopen($dir, "w");
        } else {
            echo "{$file} already exists";
        }
    }

    if(isset($_POST['edit-form'])) {
        $text = $_POST['text'];
        $file = $_POST['file'];
        $dir = "files/{$file}";

        $handle = fopen($dir, 'w');
        fwrite($handle, $text . "\n");
        fclose($handle);
    }

    $content = "";
    if(isset($_POST['text-load'])) {
        $name = $_POST['file'];
        $dir = "files/".$name;

        $handle = fopen($dir, 'r');
        $content = fread($handle, filesize($dir));

        fclose($handle);
    }
?>
<style>
    body {
        display: flex;
    }
    textarea {
        width: 300px;
        height: 250px;
        background-color: pink;
    }

    .textarea_class {
        margin-left: 50px;
    }
</style>
<body>
    <div>
        <form method="post">
            input txt file:
            <br>
            <input type="text" name="file" id=""> 
            <br><br>
            <button type="submit" name="f-submit">create</button>
        </form>
    </div>
    <div class="textarea_class">
        <form method="post">
            <label for="file">files</label>
            <select name="file" id="">
                <?php 
                    $dirs = scandir("files/");
                    for ($i=2; $i < count($dirs); $i++) { 
                        echo "<option value=" . $dirs[$i] ."> " . $dirs[$i] . " </option>";
                    } 
                ?>
            </select>

            <button type="submit" name="text-load">load</button>

            <p>edit your selected file here:</p>
            <textarea name="text" id=""><?php $content ?>
            </textarea>
            <br>
            <button type="submit" name="edit-form">edit</button>
        </form>
    </div>
</body>
</html>