<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        dir name: <input type="text" name="d-name">
        <br>
        <button type="submit" name="f-submit">search</button>
    </form>

    <?php 
        if(isset($_GET['f-submit'])) {
            $dir = $_GET['d-name'];
            searchDir($dir);
        }


        function searchDir($dir) {
            $files = scandir($dir);
            for($i = 0; $i < count($files); $i++) {
                if(substr($files[$i], -4) == ".txt"){
                    echo $files[$i] . "-" . filesize("{$dir}/{$files[$i]}") . " - bytes. Date: " . date("d-F-Y");
                    echo "<br>";
                }
            }
        }
    ?>
</body>
</html>