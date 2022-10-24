
<?php
function somando($x, $y) 
{
    return $x + $y;
}

echo somando(115, 25) . "<br>";
echo somando(8, 9, 7) . "<br>";

echo "<br>";

/*function completaSoma(...$numeros) 
{
    $somando = 0;
    foreach($numeros as $num) 
    {
        $somando += $num;
    }
    return $somando;
}

echo completasoma(2, 3, 4, 5, 6);*/

echo "<br>";

/*function pessoas($titular, ...$dependentesDePessoas) 
{
    echo "Titular: $titular <br>";
    if($dependentesdePessoas) 
    {
        foreach($dependentesDePessoas as $dep) 
        {
            echo "DependenteDePessoas: $dep <br>";
        }
    }
}

echo "<br>";
pessoas("Chico", "Francisco", "João", "Mariazinha");

echo '<br>';
pessoas("Isabele", "Teodoro");*/