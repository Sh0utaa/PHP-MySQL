<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $myfile = "files/log.txt";
        $content = date('d-m-Y') . " User visited \n";

        $handle_file;
        file_exists($myfile) ? $handle_file = fopen($myfile, 'a') : $handle_file = fopen($myfile, 'w');

        fwrite($handle_file, $content);
        fclose($handle_file);

        echo "Tracking user activity...";
    ?>
</body>
</html>