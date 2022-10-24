
<?php
function mostrarMensagens() 
{
    echo "Estamos Programando <br>";
    echo "Estamos aprendento funções em PHP com o professor Edilson!<br>";
}

mostrarMensagens();
mostrarMensagens();
mostrarMensagens();

echo "<br>";

$variavelDeTroca = 6;

function trocandoValor() 
{
    $variavelDeTroca = 7;
    echo "Durante : $variavelDeTroca <br>";
}

echo "Antes Da Função: $variavelDeTroca <br>";
trocandoValor();
echo "Depois Da Função: $variavelDeTroca <br>";

echo "<br>";

function trocaValorNovamente() 
{
    global $variavelTrocando;
    $variavelTrocando = 9;
    echo "Durante: $variavelTrocando <br>";
}

echo "Antes Da Função: $variavelTrocando <br>";
trocaValorNovamente();
echo "Depois da Função: $variavelTrocando <br>";