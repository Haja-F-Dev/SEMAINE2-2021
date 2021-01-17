<?php

// Test manuel php

$info = ['cafe', 'marron', 'cafeine'];

list($boisson, $couleur, $force) = $info;

echo "$boisson est $couleur et $force le rend spéciale <br/>";

// *****************************************************************/

$date = "30/02/2021";

/* 
* - On découpe la chaîne $date selon '/' avec la fonction explode() qui retourne un tableau 
* - Les éléments du tableau sont directement afffecté à des variables ($dd, $mm, $yyyy) dans un ordre respectif grâce à la fonction list()      
*/
list($dd, $mm, $yyyy) = explode('/', $date);

$dd = (int) $dd;
$mm = (int) $mm;
$yyyy = (int) $yyyy;

if(!checkdate($dd, $mm, $yyyy)) {
    echo "Date " . $date . " est erronnée";
}