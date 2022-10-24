
<?php
function pegarMensagem() 
{
    return "Seja bem vindo(a)!";
}

pegarMensagem();
$pM = pegarMensagem();
echo $pM;
echo "<br>", pegarMensagem();
echo "<br>";

echo "<br>";

function PegarMensagemNome($nome) 
{
    return "Olá, Como você está?, {$nome}!";
}

echo "<br>", pegarMensagemNome("Isabele");
echo "<br>", pegarMensagemNome("Teodoro");

echo "<br>";

function adicao($a, $b) 
{
    return $a + $b;
    
}

$p = 4;
$s = 5;
echo "<br>", adicao(30, 80);
echo "<br>", adicao($p, $s);
