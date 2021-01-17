<?php

// Vérifier une date

$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "01/10/2019";

if (preg_match($datePattern, $date)) 
{
    echo "Date ".$date." valide.<br>";
}
else 
{
    echo "Date ".$date." erronée.<br>";
} 