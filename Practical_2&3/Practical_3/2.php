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

    echo "<br> Table <br>";
    echo "<table border='1'>";
    for ($i=0; $i < count($arr); $i++) { 
        echo "<tr>";
        for ($j=0; $j < count($arr[0]); $j++) { 
            echo "<td>{$arr[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table";
    } 
    ?>
</body>
</html>