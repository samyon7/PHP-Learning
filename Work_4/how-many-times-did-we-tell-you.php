<?php

declare(strict_types=1);

function howManyTimesDidWeTellYou(int $numberOfTimes): string{
	return "You told me {$numberOfTimes} times";
}

echo howManyTimesDidWeTellYou(100);

?>
