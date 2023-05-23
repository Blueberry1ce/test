<?php

$n = 7; // masukkan input
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
    echo $sum;
    if ($i != $n) {
        echo "-";
    }
}
?>