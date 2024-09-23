<?php

function sumIntervals(array $intervals) {
    if (empty($intervals)) {
        return null;
    }

    $resultArr = [];
    $sum = 0;
    $intervalsAmount = 1;

    foreach ($intervals as $interval) {

        for ($i = $interval[0] ; $i <= $interval[1] ; $i++) {
            if (!in_array($i, $resultArr)) {
                $resultArr[] = $i;
            }
        }
    }

    sort($resultArr);
    for ($i = 0; $i < count($resultArr) - 1 ; $i++) {
        if ($resultArr[$i] + 1 !== $resultArr[$i + 1]) {
            $intervalsAmount++;
        }
    }

    $sum += count($resultArr) - $intervalsAmount;

    return $sum;
}


/////-----решение учителя

function sumIntervals($intervals)
{
    $values = [];
    foreach ($intervals as [$start, $end]) {
        for ($i = $start; $i < $end; $i++) {
            $values[] = $i;
        }
    }
    $uniqValues = array_unique($values);
    return count($uniqValues);
}

var_dump(sumIntervals([[5, 5]])); // 0

var_dump(sumIntervals([[-100, 0]])); // 100

var_dump(sumIntervals([
    [1, 2],
    [11, 12]
])); // 2

var_dump(sumIntervals([
    [2, 7],
    [6, 6]
])); // 5

var_dump(sumIntervals([
    [1, 9],
    [7, 12],
    [3, 4]
])); // 11

var_dump(sumIntervals([
    [1, 5],
    [-10, 19],
    [1, 7],
    [16, 100],
    [5, 11]
])); // 110