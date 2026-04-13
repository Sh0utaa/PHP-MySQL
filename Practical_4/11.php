<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        folder name: <input type="text" name="f-name">
        <br><br>
        <button type="submit" name="f-submit">Create</button>
    </form> 
    <?php 
        if(isset($_GET['f-submit'])) {
            $folder = $_GET['f-name'];
            if(is_dir($folder)) echo "Folder already exists";
            else {
                mkdir($folder);
                $handle_file = fopen($folder . "/info.txt", 'w');
                fwrite($handle_file, $folder . " " . date("d-m-Y H:i:s"));
            }
        }
    ?>
</body>
</html>