<?php

    $var = array();

    for($i = 0; $i <20; $i++){
        $var[$i] = rand(0,100);
    }


    foreach($var as $v){
        echo $v."<br>";
    }

    $maior = 0;
    $menor = 100;
    $numerosPares = 0;
    $numerosImpares = 0;
    $media = 0;

    foreach($var as $v2){        
        if($v2 > $maior){
            $maior = $v2;
        }
        if($v2 < $menor){
            $menor = $v2;
        }
        if($v2 % 2 == 0){
            $numerosPares++;
        }else{
            $numerosImpares++;
        }
        $media = $media + $v2;
    }

    echo "O maior numero é $maior <br>";
    echo "O menor numero é $menor <br>";

    $porcentagemPares = ($numerosPares / count($var)) * 100;
    $porcentagemImpares = ($numerosImpares / count($var)) * 100;
    $media = $media / count($var);

    echo "O percentual de numeros pares é $porcentagemPares <br>";
    echo "O percentual de numeros impares é $porcentagemImpares <br>";
    echo "A média é $media <br>";
    
    
?>