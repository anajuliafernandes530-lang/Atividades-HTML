<?php
    $file = fopen("file.txt", "w");
    fwrite($file, "Arquivo de texto");
    fclose($file);
?>