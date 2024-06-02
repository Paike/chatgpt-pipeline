<?php
$numbers = [2, 4, 6, 8, 10, 12];

// Using a while loop to iterate through the numbers array and display each number multiplied by 2
$i = 0;
while($i < count($numbers)){
    echo $numbers[$i] * 2 . ' ';
    $i++;
}

// Checking if product of numbers is less than 50
$product = array_product($numbers);
if($product < 50){
    echo 'Product is less than 50';
} else {
    echo 'Product is not less than 50';
}

// Adding 1 to each number in the array and storing in a new array
$addedNumbers = array_map(function($num) {
    return $num + 1;
}, $numbers);
echo implode(' ', $addedNumbers);
