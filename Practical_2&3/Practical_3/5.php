<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_GET['submit_form'])){
        $x = $_GET['x'];

        echo $x . "-aris " . count(str_split($x)) . " nishniani.";
    }
?>
<body>
   <form method="get">
    X: <input type="number" name="x">
    <button type="submit" name="submit_form">submit</button>
   </form> 
</body>
</html>