<?php
 function countRepetitions($arr, $value) {
     $count = 0;
     for ($i = 0; $i < count($arr); $i++) {
         if ($arr[$i] === $value) {
             $count++;
         }
     }
     return $count;
 }

 $numbers = [1,1,2,3,4,4,5,1,1,2,4,1];
 echo countRepetitions($numbers, 1);


