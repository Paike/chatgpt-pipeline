<?php
$sum = 0;
$i = 1;
while ($i <= 10) {
    $sum += $i;
    if ($i % 2 == 0) {
        echo "$i is even.\n";
    } else {
        echo "$i is odd.\n";
    }
    $i++;
}
echo "The sum of numbers from 1 to 10 is: $sum";
?>