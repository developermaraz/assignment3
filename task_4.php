<?php
// Task 4: Multidimensional Array
$studentGrades = [
    ["Math"=>55, "English"=>85, "Science"=>88],
    ["Math"=>39, "English"=>54, "Science"=>82],
    ["Math"=>54, "English"=>66, "Science"=>45]
];
function calculateAndPrintAverages($grades){
    foreach($grades as $student){
        $averageGrade = array_sum($student)/count($student);
        echo "Average Grade: $averageGrade \n";
    }
}
calculateAndPrintAverages($studentGrades);


?>