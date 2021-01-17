<?php

$date = new DateTime("now");
$dateFinDeFormation = new DateTime("09-07-2021");

$interval = $date->diff($dateFinDeFormation)->format("%a");

echo "Il reste $interval jours avant la fin de la formation";

