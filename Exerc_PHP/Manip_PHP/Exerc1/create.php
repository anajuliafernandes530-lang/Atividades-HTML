<?php
    $f1 = $_REQUEST['f1'];
    $f2 = $_REQUEST['f2'];
    $f3 = $_REQUEST['f3'];

    $file = fopen("file.txt", "a");

    fwrite($file, "$f1\n");
    fwrite($file, "$f2\n");
    fwrite($file, "$f3\n");
    fclose($file);

    echo "Frases adicionadas";
?>