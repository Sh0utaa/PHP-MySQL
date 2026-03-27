<?php 
    $filename = 'files/numbers.txt';
    generateNums($filename);

    function generateNums($filename) {
        if(!file_exists($filename)) {
            fopen($filename, "w");
        }
    }
?>