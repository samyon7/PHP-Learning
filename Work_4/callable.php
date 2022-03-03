<?php
$a = 15;
$callable = function() use (&$a) {
    return $a;
};
$a = 'different';
echo $callable(); // outputs 'different'
// newline for readability
echo PHP_EOL;

