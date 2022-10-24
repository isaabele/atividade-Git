<?php

function somando1($pN, $sN) 
{

    return $pN + $sN;
}

echo somando1(5, 4) . "<br>";
echo somando1(25.7, 8.5) . "<br>";

echo "<br>";

function somando2(int $nX, int $nY)
{
    return $nX + $nY;
}

echo somando2(7, 25) . "<br>";
echo somando2(3.9, 5.57) . "<br>";

echo "<br>";

