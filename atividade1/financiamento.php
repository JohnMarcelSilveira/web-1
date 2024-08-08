<?php   
    $valorFinanciado = 100000;
    $renda = 500;
    $parcelas = 120;

    function calculaFinanciamento($valorFinanciado, $renda, $parcelas) {
        $valorParcela = $valorFinanciado / $parcelas;
        $porcentagemRenda = ($valorParcela / $renda) * 100;

        if($porcentagemRenda <= 30 && $parcelas <= 180) {
            return "Financiamento aprovado";
        } else {
            return "Financiamento negado";
        }
    }

    echo calculaFinanciamento($valorFinanciado, $renda, $parcelas);