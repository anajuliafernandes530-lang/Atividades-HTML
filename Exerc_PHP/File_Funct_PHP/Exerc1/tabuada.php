<?php
    $n1 = $_REQUEST['num'];

    function calcTabuada($n1){
        echo "A tabuada do $n1 <br>";
        $linhas = [];
        for($i = 1; $i <= 10; $i++){
            $calc = $n1 * $i;
            $linha = "$n1 * $i = $calc";
            echo $linha . "<br>";
            $linhas[] = $calc;
        }
        return $linhas;
    }
    
    function guardar($linhas){
        $file = fopen("resposta.txt", "a");
        
        foreach($linhas as $linha){
            fwrite($file, $linha . "\n");
        }
        fclose($file);
        echo "Tabuada salva.<br>";
    }
    
    function ler($num){
        $file = fopen("resposta.txt", "r");
        
        while(!feof($file)){
            $line = fgets($file);
            echo "$line <br>";
        }
        fclose($file);
    }

    if ($n1) {
    $tabuada = calcTabuada($n1);
    guardar($tabuada);
    }

?>
