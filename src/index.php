<?php
$numbers = [1, 3, 5, 7, 9];

// Iterating through the numbers array and displaying each number squared
foreach($numbers as $number){
    echo $number * $number . ' ';
}

// Calculating the sum of the numbers array
$sum = 0;
foreach($numbers as $number){
    $sum += $number;
}
echo 'Sum: ' . $sum;

// Dividing each number in the array by 3 and storing in a new array
$dividedNumbers = [];
foreach($numbers as $number){
    $dividedNumbers[] = $number / 3;
}
echo implode(' ', $dividedNumbers);