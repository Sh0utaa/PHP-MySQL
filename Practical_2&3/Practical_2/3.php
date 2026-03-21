<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $matrix = array();

    for ($i=0; $i < 6; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            $matrix[$i][$j] = $i + $j;
        }
    }

    echo "<table border='1'>";
    for ($i=0; $i < count($matrix); $i++) { 
        echo "<tr>";
        for ($j=0; $j < count($matrix[0]); $j++) { 
            echo "<td>" . $matrix[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>
<body>
    
</body>
</html>