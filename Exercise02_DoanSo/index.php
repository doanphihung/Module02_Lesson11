<?php
//function createArray($num)
//{
//    $arr = [];
//    $count = 1;
//    while ($count <= $num) {
//        $randomNumber = rand(1, 50);
//        if (!checkItemOfArr($arr, $randomNumber)) {
//            array_push($arr, $randomNumber);
//            $count++;
//        }
//    }
//    sort($arr);
//    return $arr;
//}
//
//function checkItemOfArr($arr, $value)
//{
//    foreach ($arr as $item) {
//        if ($value == $item) {
//            return true;
//        }
//    }
//    return false;
//}
//$numbers = createArray(10);
//print_r($numbers);

$numbers = range(1,100);
print_r($numbers);
$randomNumber = 97;

function getNumber($arr, $value)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $midIndex = floor(($low + $high) / 2);
        if ($arr[$midIndex] > $value) {
            $high = $midIndex - 1;
        } else if ($arr[$midIndex] < $value) {
            $low = $midIndex + 1;
        } else return "Da tim thay";
    }
}




