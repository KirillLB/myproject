<?php
/*----------Мое решение--------------*/
function fizzBuzz($begin, $end) {
    $x = '';

    for ($i = $begin; $i <= $end; $i++, $x = '') {
        if ($i % 3 == 0) {
            $x = 'Fizz';
        }
        if ($i % 5 == 0) {
            $x = $x . 'Buzz';
        }
        echo $x ? ' ' . $x : ' ' . $i;
    }
}

fizzBuzz(11,20);


/*----------Решение учителя--------------*/
function fizzBuzz($begin, $end)
{
    for ($i = $begin; $i <= $end; $i++) {
        $hasFizz = $i % 3 === 0;
        $hasBuzz = $i % 5 === 0;
        $fizzPart = $hasFizz ? 'Fizz' : '';
        $buzzPart = $hasBuzz ? 'Buzz' : '';
        print_r($hasFizz || $hasBuzz ? "{$fizzPart}{$buzzPart}" : $i);
        print_r(" ");
    }
}
fizzBuzz(11,20);