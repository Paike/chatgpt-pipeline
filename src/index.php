<?php
$numbers = [1, 2, 3, 4, 5];

// Iterating through the numbers array and displaying each number multiplied by 2
foreach($numbers as $number){
    echo $number * 2 . ' ';
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

// Using a while loop to display each number in the array
$index = 0;
$length = count($numbers);
while($index < $length){
    echo $numbers[$index] . ' ';
    $index++;
}