<?php

function compareVersion($version1, $version2) {
    $result = $version1 <=> $version2;

    $separatedVersion1 = explode('.', $version1);
    $separatedVersion2 = explode('.', $version2);

    $difference = $separatedVersion1[0] <=> $separatedVersion2[0];

    if ($difference == 0) {
        $difference = $separatedVersion1[1] <=> $separatedVersion2[1];
    }

    return $difference;

}


//---------Версия прподавателя


function compareVersion(string $first, string $second)
{
    $version1 = explode('.', $first);
    $version2 = explode('.', $second);

    return $version1 <=> $version2;
}

var_dump(compareVersion("0.1", "0.2")); // → -1

var_dump(compareVersion("0.2", "0.1")); // → 1

var_dump(compareVersion("4.2", "4.2")); // → 0