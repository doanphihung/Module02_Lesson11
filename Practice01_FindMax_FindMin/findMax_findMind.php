<?php
function findMind($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = rand(1, 200);
}
foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br>". $minNeedFind;

function findMax($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
$minNeedFind = findMind($numbers);
$maxNeedFind = findMax($numbers);
echo $minNeedFind . "<br>";
echo $maxNeedFind;

