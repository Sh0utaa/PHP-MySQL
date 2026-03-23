<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
if (isset($_POST['submit_form'])) {
    $password = $_POST['password'];

    if (!preg_match('/[$!_@]/', $password)) {
        echo "paroli unda sheicavdes minimum ert simbolos";
    
    } elseif (strlen($password) < 8) {
        echo "paroli unda iyos minimum 8 aso";
    
    } elseif (!preg_match('/[0-9]/', $password)) {
        echo "paroli unda sheicavdes cifrebs";
    
    } else {
        echo "paroli dzlieria!";
    }

    echo "<br>";
}
?>
<body>
    <form method="post">
        <h1>password strength checker</h1>
        paroli: <input type="text" name="password">
        <br><br>
        <button type="submit" name="submit_form">check</button>
    </form> 
</body>
</html>