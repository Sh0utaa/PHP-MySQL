<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $arr = array();

    if(isset($_GET['submit_form'])) {
        $M = (int)$_GET['M'];
        $m = (int)$_GET['m'];
        $n = (int)$_GET['n'];

        for ($i=0; $i < $M; $i++) { 
            $arr[$i] = rand($m, $n);
        }

    }
?>
<body>
   <form method="get">
    M: <input type="number" name="M">
    <br><br>
    m: <input type="number" name="m">
    <br><br>
    n: <input type="number" name="n">
    <br><br>
    <button type="submit" name="submit_form">submit</button>
   </form> 
   <?php 
        echo "<br>";
        print_r($arr);
        echo "<br>";
   ?>
</body>
</html>