<?php
$numbers = [3, 5, 7, 9, 11];

// Using a while loop to iterate through the numbers array and display each number squared
$i = 0;
while($i < count($numbers)){
    echo $numbers[$i] * $numbers[$i] . ' ';
    $i++;
}

// Checking if product of numbers is greater than 30
$product = array_product($numbers);
if($product > 30){
    echo 'Product is greater than 30';
} else {
    echo 'Product is not greater than 30';
}

// Adding 2 to each number in the array and storing in a new array
$addedNumbers = array_map(function($num) {
    return $num + 2;
}, $numbers);
echo implode(' ', $addedNumbers);
