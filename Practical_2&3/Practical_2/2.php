<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
    }
    table {
        margin: 5px;
    }
</style>
<?php 
    $matrix = array();
    $sum = 0;
    $product = 1;
    $min = 100;
    $max = 10;

    for ($i=0; $i < 12; $i++) { 
        for ($j=0; $j < 12; $j++) { 
            $matrix[$i][$j] = rand(10, 100);
            $sum += $matrix[$i][$j];
            $product *= $matrix[$i][$j];
            if($matrix[$i][$j] > $max) {
                $max = $matrix[$i][$j];
            } elseif($matrix[$i][$j] < $min) {
                $min = $matrix[$i][$j];
            }
        }
    }    

    function printTable($matrix, $cellFunc) {
        echo "<table border='1'>";
            for ($i=0; $i < count($matrix); $i++) { 
                echo "<tr>";
                    for ($j=0; $j < count($matrix[0]); $j++) { 
                        echo "<td>" . $cellFunc($matrix, $i, $j) . "</td>";
                    }
                echo "</tr>";
            }
        echo "</table>";
    }

    echo "<div>";
        echo "matrica: <br>";
        printTable($matrix, function($m, $i, $j) {
            return $m[$i][$j];
        });

        echo "matricis zeda diagonali: <br>";
        printTable($matrix, function($m, $i, $j) {
            return ($j >= $i) ? $m[$i][$j] : "";
        });
    echo "</div>";

    echo "<div>";
        echo "cifrebis jami: <br>";
        printTable($matrix, function($m, $i, $j) {
            return array_sum(str_split($m[$i][$j]));
        });

    if(isset($_POST['submit_form'])) {
        $x = $_POST['x'];


        echo $x . "-is jeradi ricxvebi: <br>";
        printTable($matrix, function($m, $i, $j) {
            return $m[$i][$j] % $_POST['x'] == 0 ? $m[$i][$j] : "";
        });
    }
    echo "</div>";
?>
<body>
    <?php 
        echo "matricis elementebis jami: " . $sum;
        echo "<br>";
        echo "matricis elementebis namravli: " . $product;
        echo "<br>";
        echo "matricis gani: " . $max - $min;
        echo "<br>";
        echo "matricis sashualo aritmetikuli: " . $sum / count($matrix)*count($matrix);
        echo "<br>";
    ?> 
    <br>
    <form method="post">
        x: <input type="number" aria-label="x" name="x">
        <br><br>
        <button type="submit" name="submit_form">submit</button>
    </form>
</body>
</html>