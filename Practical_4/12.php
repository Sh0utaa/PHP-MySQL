<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $filename = "";
    $content = "";

    if(isset($_POST['f-submit'])) {
        $filename = $_POST['f-name'];
        $text = $_POST['f-text'];

        $file = "12/" . $filename . ".txt";

        if(empty($filename) || empty($text)) {
            echo "don't leave any information blank.";
        } elseif(file_exists($file)) {
            echo "$file exists...";
            $handle = fopen($file, 'a');
            fwrite($handle, $text);

            $handle = fopen($file, 'r');
            $content = fread($handle, filesize($file));

            fclose($handle);
        } else {
            echo "making file $file";
            $handle = fopen($file, 'w');
            fwrite($handle, $text);

            $handle = fopen($file, 'r');
            $content = fread($handle, filesize($file));

            fclose($handle);
        }
    }

?>
<style>
    form {
        margin: auto;
        width: 50%;
        height: 250px;
    }

    textarea {
        width: 90%;
        height: 50%;
    }
</style>
<body>
    <form method="post">
        file name: <input type="text" name="f-name" value="<?php echo $filename ?>">
        <br><br>
        <textarea name="f-text" id=""><?php echo $content ?></textarea>
        <br>
        <button type="submit" name="f-submit">save</button>
    </form> 
</body>
</html>