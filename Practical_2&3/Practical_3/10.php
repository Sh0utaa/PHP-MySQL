<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_POST['submit_form'])) {
        $url = $_POST['url'];

        if(preg_match('/[0-9]/', $url)) {
            echo "linki sheicavs cifr(eb)s";
        } else {
            echo "linki ar sheicavs cifr(eb)s";
        }

        echo "<br>";
    }
?>
<body>
    <form  method="post">
        <h1>does url contain a number</h1>
        url: <input type="text" name="url">
        <br><br>
        <button type="submit" name="submit_form">check url</button>
    </form>
</body>
</html>