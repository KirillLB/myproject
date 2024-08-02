<?php
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
