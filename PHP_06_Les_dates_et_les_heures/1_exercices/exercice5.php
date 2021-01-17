<?php

$tabAnnee = [2021, 2022, 2023, 2024, 2025];

function est_bissextile($annee)
{
    return date("m-d", strtotime("$annee-02-29")) == "02-29";
}

for ($i = 0; $i < count($tabAnnee); $i++) {
    if (est_bissextile($tabAnnee[$i])) {
        echo "La prochaine année bissextile est : " . $tabAnnee[$i];
    }
}
