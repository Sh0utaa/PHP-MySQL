<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $arr = [];
    for($i = 0; $i < 12; $i++) {
        $arr[$i] = rand(10, 100);
    } 

    if(isset($_GET['submit_form'])) {
        $x = $_GET['x'];
        $less = 0;
        $more = 0;

        foreach($arr as $num) {
            if($num > $x) {
                $more++;
            } elseif ($num < $x) {
                $less++;
            }
        }

        echo $x . ": metia " . $more . "-ze da naklebia: " . $less . "-ze";
    }
?>
<body>
    <form method="get">
        X: <input type="text" name="x">
        <br><br>
        <button type="submit" name="submit_form">Submit</button>
    </form>
</body>
</html>
