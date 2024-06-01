<?php
$numbers = [2, 4, 6, 8, 10, 12];

// Using a for loop to iterate through the numbers array and display each number multiplied by 3
for($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i] * 3 . ' ';
}

// Checking if sum of numbers is greater than 40
$sum = array_sum($numbers);
if($sum > 40){
    echo 'Sum is greater than 40';
} else {
    echo 'Sum is not greater than 40';
}

// Subtracting 1 from each number in the array and storing in a new array
$subtractedNumbers = array_map(function($num) {
    return $num - 1;
}, $numbers);
echo implode(' ', $subtractedNumbers);
