<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_GET['submit_form'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $op = $_GET['op'];

        $correct = $op === "+" ? $num1 + $num2 : $num1 - $num2;

        if((int)$_GET['user_answer'] !== $correct) {
            echo "pasuxi arasworia gtxovt sheamowmot";
        } else {
            echo "pasuxi sworia!";
        }
    } else {
        $num1 = rand(10,99);
        $num2 = rand(10,99);
        $op = rand(0, 1) == 1 ? "+" : "-" ;
    }
?>
<body>
    <form method="get">
        <?php echo "$num1 $op $num2 = "; ?>
        <input type="hidden" name="num1" value="<?php echo $num1 ?>">
        <input type="hidden" name="op" value="<?php echo $op ?>">
        <input type="hidden" name="num2" value="<?php echo $num2 ?>">

        <input type="number" name="user_answer">
        <button type="submit" name="submit_form">submit</button>
    </form>
</body>
</html>