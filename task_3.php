<?php

// Task 3: Array Sorting  
$grades = array(85, 92, 78, 88, 95);
function sortAndPrintGrades($arr) {
    rsort($arr);
    print_r($arr);
}
sortAndPrintGrades($grades);
?>