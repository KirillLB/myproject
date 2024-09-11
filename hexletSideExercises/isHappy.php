<?php
/*----------My solution--------------*/
function numSum($string) {
    $sum = 0;
    for($i=0; $i < strlen($string); $i++) {
        $sum += (int) $string[$i];
    }
    return $sum;
}
function isHappy($ticket) {
    $len = strlen($ticket);
    $halfLen = $len/2;

    if ($len % 2 === 0) {
        $part1 = substr($ticket, 0, $halfLen);
        $part2 = substr($ticket, $halfLen);
        return numSum($part1) == numSum($part2);
    }
    else {
        return false;
    }
}
echo isHappy('385916') ? 'True' : 'False';
echo isHappy('231002') ? 'True' : 'False';
echo isHappy('1222') ? 'True' : 'False';
echo isHappy('054702') ? 'True' : 'False';
echo isHappy('00') ? 'True' : 'False';

/*----------Teacher's solution--------------*/
function isHappy($str)
{
    $balance = 0;
    for ($i = 0, $j = strlen($str) - 1; $i < $j; $i += 1, $j -= 1) {
        $balance += $str[$i] - $str[$j];
    }
    return $balance === 0;
}
