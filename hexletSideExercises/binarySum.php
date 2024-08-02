<?php
function binarySum(string $a, string $b)
{
    $i = strlen($a);
    $j = strlen($b);
    $c = '';
    $x = '0';

    while ($i > 0 || $j > 0 || (int) $x == 1) {
        $num1 = $i > 0 ? (int) $a[$i - 1] : 0;
        $num2 = $j > 0 ? (int) $b[$j - 1] : 0;
        if ($num1 + $num2 == 2) {
            $c = $x . $c;
            $x = '1';
        }
        elseif ($num1 + $num2 + (int) $x == 2) {
            $c = '0' . $c;
            $x = '1';
        }
        else {
            $c = '1' . $c;
            $x = '0';
        }
        --$i;
        --$j;
    }
    return $c;
}
echo '</br> ---binarySum----</br>';
echo binarySum('10110101','11001');