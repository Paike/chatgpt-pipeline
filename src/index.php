<?php
$numbers = [1, 2, 3, 4, 5];
foreach($numbers as $number){
    echo $number * 2 . ' ';
}

$sum = 0;
foreach($numbers as $number){
    $sum += $number;
}
echo 'Sum: ' . $sum;

$multipliedNumbers = [];
foreach($numbers as $number){
    $multipliedNumbers[] = $number * 3;
}
echo implode(' ', $multipliedNumbers);

$index = 0;
$length = count($numbers);
while($index < $length){
    echo $numbers[$index] . ' ';
    $index++;
}
