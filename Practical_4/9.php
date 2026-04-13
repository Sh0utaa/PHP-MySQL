<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        file name: <input type="text" name="f-name">
        <br>
        <button type="submit" name="f-submit">search</button>
    </form>

    <?php  
        if(isset($_POST['f-submit'])) {
            $file = $_POST['f-name'];
            $file = "files/$file";

            if(file_exists($file)) {
                $handle_file = fopen($file, "r");
                echo fread($handle_file, filesize($file));
            } else {
                echo "<br> ფაილი ვერ მოიძებნა!";
            }
        }
    ?>
</body>
</html>