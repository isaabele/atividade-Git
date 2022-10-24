
<?php

$adicao = function ($n1, $n2) 
{
    return $n1 + $n2;
};

echo $adicao(5, 9) . "<br>";


echo "<br>";


function colocarEmPratica($y, $x, $operacao, $func) 
{
    $resultadoFunc = $func($a, $b);
    echo "$y $operacao $x = $resultadoFunc <br>";
}

colocarEmPratica(5, 8, '+', $adicao);


echo "<br>";


$multi = function($one, $two) 
{
    return $one * $two;
};

colocarEmPratica(6, 4, '*', $multi);

