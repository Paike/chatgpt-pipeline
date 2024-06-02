<?php
$names = ['Alice', 'Bob', 'Charlie', 'David', 'Eve'];

$counter = 0;
while($counter < count($names)) {
    echo $names[$counter] . ' ';
    $counter++;
}

$totalLength = array_reduce($names, function($carry, $name) {
    return $carry + strlen($name);
}, 0);

if($totalLength > 20) {
    echo '
Total length of names is greater than 20';
} else {
    echo '
Total length of names is not greater than 20';
}

$uppercaseNames = array_map(function($name) {
    return strtoupper($name);
}, $names);
echo implode(' ', $uppercaseNames);
