<?php

$date = new DateTime('14-07-2019');

echo "La semaine de la date " . $date->format('d-m-Y') . " est : " . $date->format('W');