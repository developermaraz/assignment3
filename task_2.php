<?php
// Task 2: Array Manipulation
$number = range(1,10);
function removeEvenNumbers($arr) {
    $filteredArray = array_filter($arr, function($num) {
        return $num % 2 != 0;
    });
    print_r($filteredArray);
}
removeEvenNumbers($number);
?>