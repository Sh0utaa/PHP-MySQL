<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_POST['f-submit'])) {
        $folder = $_POST['f-name'];
        
        if(!is_dir($folder)) {
            echo "Folder $folder doesn't exists.";
        } else {
            $count = 0;
            $files = scandir($folder);

            $handle = fopen($folder . "/sum.txt", 'w');

            for($i = 0; $i < count($files); $i++) {
                if(substr($files[$i], -4) == ".txt" && $files[$i] != "sum.txt") {
                    $count++;
                    $myfile = fopen($folder . "/" . $files[$i], 'r');
                    $content = fread($myfile, filesize($folder . "/" . $files[$i]));
                    fwrite($handle, $content);

                    fclose($myfile);
                }
            }

            echo "<br>";
            echo "appended $count file(s) to sum.txt";
            echo "<br>";
            $handle = fopen("$folder/sum.txt", 'r');
            echo fread($handle, filesize("$folder/sum.txt"));
        }
    }
?>
<body>
   <form method="post">
        folder name: <input type="text" name="f-name">
        <br><br>
        <button type="submit" name="f-submit">make</button>
   </form> 
</body>
</html>