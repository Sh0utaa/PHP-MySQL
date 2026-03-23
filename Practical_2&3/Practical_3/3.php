<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $kodi = 31293;
    if(isset($_POST['submit_form'])) {
        $num = $_POST['num'];

        if((int)$num !== $kodi) {
            echo "gtxovt sworad miutitot kodi.";
        } else {
            echo "kodi warmatebit sheiyvanet!";
        }
    }
?>
<body>
    <h1>shemtxveviti kodi: <?php echo $kodi ?></h1> 
    <form method="post">
        kodi: <input type="number" name="num">
        <br><br>
        <button type="submit" name="submit_form">submit</button>
    </form>
</body>
</html>