<?php
$numbers = [1, 2, 3, 4, 5];
echo "Numbers up to 5:";
foreach($numbers as $number) {
    echo $number . " ";
}

$i = 0;
echo "\nNumbers up to 3:";
while($i < 3) {
    echo $numbers[$i] . " ";
    $i++;
}

$check = 6;
if($check < 5) {
    echo "\nLess than 5";
} else {
    echo "\nGreater than or equal to 5";
}
?>