<?php
$numbers = [3, 5, 7, 9, 11];

// Using a for loop to iterate through the numbers array and display each number squared
for($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i] * $numbers[$i] . ' ';
}

// Checking if sum of numbers is greater than 30
$sum = array_sum($numbers);
if($sum > 30){
    echo 'Sum is greater than 30';
} else {
    echo 'Sum is not greater than 30';
}

// Subtracting 2 from each number in the array and storing in a new array
$subtractedNumbers = array_map(function($num) {
    return $num - 2;
}, $numbers);
echo implode(' ', $subtractedNumbers);
