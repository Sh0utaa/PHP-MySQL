<?php 
    $file = "test.txt";

    $file = fopen("files/".$file, "w");
    fwrite($file, "Hello world");

    fclose($file);
?>