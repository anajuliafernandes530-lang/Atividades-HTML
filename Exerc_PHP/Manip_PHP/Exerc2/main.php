<?php

$arquivo_json = 'users.json';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if(file_exists($arquivo_json)){
        $conteudo_json = file_get_contents($arquivo_json);
        $users = json_decode($conteudo_json, true);

        if($users === null || !is_array($users)){
            $users = [];
        }
    }else{
        $users = [];
    }
    $novo_id = count($users) + 1;
    $novo_user = [
        'id' => $novo_id,
        'nome' => $nome,
        'email' => $email,
    ];
    $users[] = $novo_user;

    $novo_conteudo_json = json_encode($users, JSON_PRETTY_PRINT);

    if(file_put_contents($arquivo_json, $novo_conteudo_json)){
        header("Location: list.php");
        exit;
    }else{
        echo "Erro ao salvar o user";
    }
}else{
    echo "Método de requisição invalido";
}

?>