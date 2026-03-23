<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $arr = array();

    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $arr[$i][$j] = rand(10, 99);
        }
    }

    echo "<table border='1'>";
    for ($i=0; $i < count($arr); $i++) { 
        echo "<tr>";
        for ($j=0; $j < count($arr[0]); $j++) { 
            echo "<td>{$arr[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table";
?>
<body>
    
</body>
</html>
