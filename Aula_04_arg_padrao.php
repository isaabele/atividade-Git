
<?php

function comprimento($nome = "Senhor(a)", $sobrenome = "Voluntário") 
{
    return "Seja Bem vindo, $nome $sobrenome!<br>";
}

echo comprimento();
echo comprimento(null);
echo comprimento(null, null);
echo comprimento("Querida", "Pessoa");

echo "<br>";

function registrarPedido($pratoPrincipal, $sobremesa = "Açaí") 
{
    echo "Para comer: $pratoPrincipal <br>";
    echo "Para saborear após comer : $sobremesa <br>";
}

registrarPedido("Escondidinho de carne moída");
//anotarPedido("Strogonnof", "Browne recheado de creme de ninho");

echo "<br>";

function regitrarPedido2($Petisco = "Filé de Tilapia", $bebida) {
    echo "Para forra o estômago: $Petisco <br>";
    echo "Para beber: $bebida <br>";
}


registarPedido2("Batata frita com Bacon e cheddar", "Água Tônica com sabor");