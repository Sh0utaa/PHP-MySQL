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
        $M = $_GET['M'];
        $N = $_GET['N'];
        $m = $_GET['m'];
        $n = $_GET['n'];

        for ($i=0; $i < $M; $i++) { 
            for ($j=0; $j < $N; $j++) { 
                $arr[$i][$j] = rand($m, $n);
            }
        }
    }
?>
<body>
    <form method="get">
        <input type="number" name="M" placeholder="M">
        <br><br>
        <input type="number" name="N" placeholder="N">
        <br><br>
        <input type="number" name="m" placeholder="m">
        <br><br>
        <input type="number" name="n" placeholder="n">
        <br><br>
        <button type="submit" name="submit_form">submit</button>
    </form> 

    <?php 
    if($arr) {
        $column_sum = array();
        echo "<br> Table <br>";
        echo "<table border='1'>";

        echo "<tr>";
        for ($i = 0; $i < count($arr[0]); $i++) { 
            echo "<td>$i:</td>";
        }
        echo "</tr>";

        for ($i=0; $i < count($arr); $i++) { 
            echo "<tr>";
            $row_sum = 0;
            for ($j=0; $j < count($arr[0]); $j++) { 
                $row_sum += $arr[$i][$j];
                $column_sum[$j] = ($column_sum[$j] ?? 0) + $arr[$i][$j];

                echo "<td>{$arr[$i][$j]}</td>";
                if($j == count($arr[0]) - 1) {
                    echo "<td>{$row_sum}</td>";
                }
            }
            echo "</tr>";
            }

        echo "<tr>";
        for ($i=0; $i < count($column_sum); $i++) { 
            echo "<td>{$column_sum[$i]}</td>";
        }
        echo "</table>";
    } 
    ?>
</body>
</html>