<?php
$numbers = [6, 7, 8, 9, 10];

// Iterating through the numbers array and displaying each number cubed
foreach($numbers as $number){
    echo $number * $number * $number . ' ';
}

// Calculating the sum of the numbers array
$sum = 0;
foreach($numbers as $number){
    $sum += $number;
}
echo 'Sum: ' . $sum;

// Multiplying each number in the array by 3 and storing in a new array
$multipliedNumbers = [];
foreach($numbers as $number){
    $multipliedNumbers[] = $number * 3;
}
echo implode(' ', $multipliedNumbers);