<?php
$numbers = [3, 5, 7, 9, 11, 13];

// Using a for loop to iterate through the numbers array and display each number multiplied by 3
for($i=0; $i < count($numbers); $i++){
    echo $numbers[$i] * 3 . ' ';
}

// Checking if sum of numbers is greater than 50
$sum = array_sum($numbers);
if($sum > 50){
    echo 'Sum is greater than 50';
} else {
    echo 'Sum is not greater than 50';
}

// Subtracting 1 from each number in the array and storing in a new array
$subtractedNumbers = array_map(function($num) {
    return $num - 1;
}, $numbers);
echo implode(' ', $subtractedNumbers);