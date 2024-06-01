<?php
$numbers = [3, 5, 7, 9, 11];

// Using a while loop to iterate through the numbers array and display each number squared
$i = 0;
while($i < count($numbers)){
    echo $numbers[$i] * $numbers[$i] . ' ';
    $i++;
}

// Checking if sum of numbers is greater than 30
$sum = 0;
$i = 0;
while($i < count($numbers)){
    $sum += $numbers[$i];
    $i++;
}
if($sum > 30){
    echo 'Sum is greater than 30';
} else {
    echo 'Sum is not greater than 30';
}

// Subtracting 2 from each number in the array and storing in a new array
$subtractedNumbers = [];
$i = 0;
while($i < count($numbers)){
    $subtractedNumbers[] = $numbers[$i] - 2;
    $i++;
}
echo implode(' ', $subtractedNumbers);
