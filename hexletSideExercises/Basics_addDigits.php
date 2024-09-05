<?php
function addDigits($number){
    $stringNumber = (string)$number;
    for($res = 0; strlen($stringNumber) > 1; $stringNumber = (string)$res) {
        for($res = 0, $i = 0; $i < strlen($stringNumber); $i++) {
            $res += (int)$stringNumber[$i];
        }
    }
    return (int)$stringNumber;
}
echo addDigits(38);

