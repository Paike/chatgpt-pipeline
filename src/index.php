<?php
$numbers = [3, 5, 7, 9, 11];

// Iterating through the new numbers array and displaying each number squared
foreach($numbers as $number){
    echo $number * $number . ' ';
}

// Calculating the sum of the numbers array
$sum = 0;
foreach($numbers as $number){
    $sum += $number;
}
echo 'Sum: ' . $sum;

// Adding 3 to each number in the array and storing in a new array
$addedNumbers = [];
foreach($numbers as $number){
    $addedNumbers[] = $number + 3;
}
echo implode(' ', $addedNumbers);