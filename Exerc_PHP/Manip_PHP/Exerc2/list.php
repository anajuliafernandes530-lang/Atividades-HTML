<?php
    $arquivo_json = 'users.json';
    $users = json_decode(file_get_contents($arquivo_json), true);

    echo "<h3>Lista de users</h3>";
    foreach($users as $user){
        echo "ID: {$user ['id']} <br>";
        echo "Nome: {$user ['nome']} <br>";
        echo "Email: {$user ['email']} <br>";
        echo "---------------------------- <br>";
    }
    echo "fim do arquivo";
    
?>

