<?php
$numbers = [2, 4, 6, 8, 10];

// Iterating through the new numbers array and displaying each number cubed
foreach($numbers as $number){
    echo $number * $number * $number . ' ';
}

// Calculating the product of the numbers array
$product = 1;
foreach($numbers as $number){
    $product *= $number;
}
echo 'Product: ' . $product;

// Subtracting 2 from each number in the array and storing in a new array
$subtractedNumbers = [];
foreach($numbers as $number){
    $subtractedNumbers[] = $number - 2;
}
echo implode(' ', $subtractedNumbers);