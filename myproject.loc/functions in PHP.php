<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Пример встраивания PHP в HTML</title>
</head>
<body>
<h1>Пример встраивания PHP в HTML</h1>
<?php
/*Напишите функцию, которая будет принимать на вход 3 аргумента с типом float
и возвращать минимальное значение.
*/
function minArg(float $a, float $b, float $c) {
        if ($a < $b && $a < $c) {
            return $a;
        }
        elseif ($b < $a && $b < $c)  {
            return $b;
        }
        else
            return $c;
    }
echo minArg(3.8, 8.8, 4.5);

echo '</br>';
echo "Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2." . "</br>";
function doubleByReference(int &$x, int &$y) {
    $x *= 2;
    $y *= 2;
}

$a = 5;
$b = 7;
doubleByReference($a, $b);
echo $a . '</br>';
echo $b . '</br>';


echo "Напишите функцию, считающую факториал числа (произведение целых чисел от единицы до переданного).
Реализуйте с помощью рекурсии." . "</br>";

function calculateFactorial(int $x) {
    if ($x == 0) {
        return 1;
    }
    return $x * calculateFactorial($x - 1);
}

echo calculateFactorial(5);
echo "</br>";

echo "Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения.
И да, тут тоже нужно реализовать с помощью рекурсии" . "</br>";
function printNumbersUpTo(int $x) {
    if ($x == 0) {
        echo $x;
        return;
    }
    printNumbersUpTo($x - 1);
    echo $x;
}
printNumbersUpTo(5);
?>

</body>
</html>