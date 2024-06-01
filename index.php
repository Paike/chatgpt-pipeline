<?php
for ($i = 0; $i < rand(1, 10); $i++) {
echo 'Iteration ' . ($i+1) . '\n';
if ($i % 2 == 0) {
echo 'Even iteration\n';
} else {
echo 'Odd iteration\n';
}
}
?>