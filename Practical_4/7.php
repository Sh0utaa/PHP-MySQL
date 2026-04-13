<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_GET['f-submit'])) {
        $dir = $_GET['dir'];

        if(!is_dir($dir)) mkdir($dir);
        
        echo "\"{$dir}\"-დირექტორიის შიგთავსი: <br>";
        $dir = scandir($dir);
        for($i = 2; $i < count($dir); $i++) {
            echo $dir[$i];
            echo "<br>";
        }
        echo "<br>";
    }
?>
<body>
    <form method="get">
        dir: <input type="text" name="dir">
        <br><br>
        <button type="submit" name="f-submit">search</button>
    </form>
</body>
</html>