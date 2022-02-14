<?php

$name = $argv[1];
$heightMeters = (int)$argv[2];
$heightCentiMeters = (int)$argv[3];

// Convert centimeters to meters

$cmToMeter = (float)($heightCentiMeters/100);

$finalHeightInMeters = $heightMeters + $cmToMeter;

echo $name.':'.$finalHeightInMeters.'m';

?>
