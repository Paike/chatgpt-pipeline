<?php
$numbers = [4, 6, 8, 10, 12];

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

// Dividing each number in the array by 2 and storing in a new array
$dividedNumbers = [];
foreach($numbers as $number){
    $dividedNumbers[] = $number / 2;
}
echo implode(' ', $dividedNumbers);