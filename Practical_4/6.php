<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        createFiles();

        function createFiles() {
            if(!is_dir("files_/")) mkdir("files_/");

            $files = ["file1.txt", "file2.txt", "file3.txt"];
            $content = ["file 1 content", "file 2 content", "file 3 content"];

            for($i = 0; $i < count($files); $i++) {
                $handle_file = fopen("files_/{$files[$i]}", "w");
                fwrite($handle_file, $content[$i]);
                fclose($handle_file);
            }

            echo "created dir /files_!";
            echo "<br>";
            $dirs = scandir("files_/");
            for($i = 2; $i < count($dirs); $i++) {
                echo $dirs[$i];
                echo "<br>";
            }
        }
    ?>
</body>
</html>