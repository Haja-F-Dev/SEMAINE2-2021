<?php

$date = new DateTime();
$date->add(new DateInterval('P1M'));
echo $date->format('d-m-Y');