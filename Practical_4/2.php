<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $filename = "files/user.txt";
    $content = initFile($filename);

    if(isset($_POST['f-save'])) {
        $content = $_POST['content'];

        $handle = fopen($filename, 'w');
        fwrite($handle, empty($content) ? "" : $content);
        fclose($handle);
    }

    function initFile($filename) {
        if(file_exists($filename)) {
            echo "$filename exists!";
            $handle = fopen($filename, 'r');

            $size = filesize($filename);
            if($size === 0) {
                return "";
            }

            $content = fread($handle, $size);
            fclose($handle);
            return $content;
        } else {
            echo "creating {$filename}...";
            $handle = fopen($filename, "w");
            fwrite($handle, "");
            return "";
        }
    }
?>
<body>
    <form method="post">
        user.txt
        <br>
        <textarea name="content" id=""><?php echo $content ?></textarea>
        <br>
        <button type="submit" name="f-save">save</button>
    </form>    
</body>
<style>
    form {
        width: 50%;
        margin: auto;
    }

    textarea {
        width: 100%;
        height: 100px;
    }
</style>
</html>