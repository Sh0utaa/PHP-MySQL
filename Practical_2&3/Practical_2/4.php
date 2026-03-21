<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $cars = array(
        array("Make" => "Toyota", "Model" => "Corolla", "Color" => "White", "Mileage" => 24000, "Status" => "Sold"),
        array("Make" => "Toyota", "Model" => "Camry", "Color" => "Black", "Mileage" => 56000, "Status" => "Available"),
        array("Make" => "Honda", "Model" => "Accord", "Color" => "White", "Mileage" => 15000, "Status" => "Sold"),
    );

    echo "<table border='1'>";
        echo "<tr>";
        foreach($cars[0] as $key => $value) {
            echo "<td>{$key}<td>";
        }
        echo "</tr>";

        for ($i=0; $i < count($cars); $i++) { 
            echo "<tr>";
            foreach($cars[0] as $key => $value) {
                echo "<td>{$value}<td>";
            }
            echo "</tr>";
        }
    echo "</table>";
?>
<body>
    
</body>
</html>