<?php
$numbers = [1, 2, 3, 4, 5];

// Iterating through the numbers array and displaying each number squared
foreach($numbers as $number){
    echo $number * $number . ' ';
}

// Calculating the product of the numbers array
$product = 1;
foreach($numbers as $number){
    $product *= $number;
}
echo 'Product: ' . $product;

// Dividing each number in the array by 2 and storing in a new array
$dividedNumbers = [];
foreach($numbers as $number){
    $dividedNumbers[] = $number / 2;
}
echo implode(' ', $dividedNumbers);
