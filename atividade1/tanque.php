<?php

$temperatura = 150;

function classificaTemperatura($temperatura) {
    if($temperatura >= 0 && $temperatura < 300) {
        echo "Estado normal";
    }elseif($temperatura > -50 && $temperatura < 500) {
        echo "Estado de alerta";
    }else {
        echo "Estado crítico";
    }   
}


echo classificaTemperatura(10), "<br>";
echo classificaTemperatura(301), "<br>";
echo classificaTemperatura(500), "<br>";
echo classificaTemperatura($temperatura);

