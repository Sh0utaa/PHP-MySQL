<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_POST["f-submit"])) {
        $folder = $_POST["folder-name"];

        displayFolder($folder);
    }

    function displayFolder($folder) {
        if(is_dir($folder)) {
            $files = scandir($folder);

            foreach($files as $file) {
                if($file == "." || $file == "..") {
                    continue;
                }  

                $fullPath = $folder . DIRECTORY_SEPARATOR . $file;
                if(is_file($fullPath)) {
                    echo $fullPath . "<br>";
                } elseif (is_dir($fullPath)) {
                    displayFolder($fullPath);
                }
            }
        } else {
            echo "folder $folder doesn't exist";
        }
    }
?>
<body>
    <form method="post">
        folder <input type="text" name="folder-name">
        <br>
        <button type="submit" name="f-submit">search</button>
    </form>    
</body>
</html>