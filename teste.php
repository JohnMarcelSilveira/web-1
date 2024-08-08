<?php

echo "Para mostrar aspas duplas usamos \" para mostrar aspas simples ' <br>";
print 'Para mostrar aspas simples usamos \' para mostrar aspas duplas "';

$nota = 7;

echo "Aprovado {$nota}";

function MensagemDeApresentacao(\$lIdentificacaoPadrao = "presado(a) cliente", \$lNome){

return "Seja bem vindo \$lIdentificacaoPadrao \$lNome ao módulo administrativo do nosso si4" 
}
echo MensagemDeApresentacao("Carlos Alberto");
