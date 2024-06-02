<?php
$numbers = [1, 2, 3, 4, 5];
echo 'Numbers greater than 3: ';
foreach ($numbers as $number) {
    if ($number > 3) {
        echo $number . ' ';}
}

$i = 0;
while ($i < count($numbers)) {
    if ($numbers[$i] % 2 == 0) {
        echo $numbers[$i] . ' is even. ';
    } else {
        echo $numbers[$i] . ' is odd. ';
    }
    $i++;
}

?>