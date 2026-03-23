<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 

    if(isset($_GET['submit_form'])) {
        $M = $_GET['M'];
        $N = $_GET['N'];
        $a = $_GET['a'];
        $b = $_GET['b']; 
    }

    function printTable($M, $N, $a, $b) {
        echo "<table border='1'>";
        for ($i=0; $i < $M; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $N; $j++) { 
                echo "<td>" . rand($a, $b) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>
<body>
    <form method="get">
        <input type="number" name="M" placeholder="M">
        <br><br>
        <input type="number" name="N" placeholder="N">
        <br><br>
        <input type="number" name="a" placeholder="a">
        <br><br>
        <input type="number" name="b" placeholder="b">
        <br><br>
        <button type="submit" name="submit_form">submit</button>
    </form> 

    <?php 
        printTable($M, $N, $a, $b);
    ?>
</body>
</html>