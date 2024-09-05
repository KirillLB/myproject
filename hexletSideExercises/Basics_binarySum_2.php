<?php
function binarySum(string $stringA, string $stringB)
{
    $numA = bindec($stringA);
    $numB = bindec($stringB);

    $sum = $numA + $numB;

    return decbin($sum);

}
echo '</br> ----binarySum_2---</br>';
echo binarySum('10110101','11001');