<?php

function dateEstValide($date, $format = 'd/m/Y') {
    $dt = DateTime::createFromFormat($format, $date);
    return $dt && $dt->format($format) === $date;
}

if (!dateEstValide('17/17/2019')) {
    echo "La date 17/17/2019 est erronnée";
}
