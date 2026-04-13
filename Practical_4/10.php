<?php 
    if(!is_dir("backup")) mkdir("backup");

    $data_copy = fopen("backup/data_copy.txt", 'w');
    $data = fopen("files/data.txt", 'r');

    $data_content = fread($data, filesize("files/data.txt"));
    fwrite($data_copy, $data_content);
    echo "backed up data.txt";
    
    echo $data_content;
    fclose($data_copy);
    fclose($data);
?>