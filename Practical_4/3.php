<?php 

$filename = "files/data.txt";
echo "<br>" . initFile($filename);

function initFile($filename) {
    if(file_exists($filename)) {
        echo "$filename exists!";
        $handle = fopen($filename, 'r');

        $size = filesize($filename);
        if($size === 0) {
            return "";
        }

        $content = fread($handle, $size);
        fclose($handle);
        return $content;
    } else {
        $content = "New File Created";
        echo "creating {$filename}...";
        $handle = fopen($filename, "w");
        fwrite($handle, $content);
        return $content;
    }
}
?>