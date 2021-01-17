<?php

$date = time();

$dateDeFinDeFormation = mktime(0, 0, 0, 7, 9, 2021);

$interval = (($dateDeFinDeFormation - $date)/24/60/60);
$interval = round($interval);

echo "Il reste " . $interval . " jours ";
