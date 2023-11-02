<?php
function afficherNombresPairs($nMax)
{
    $texte ="";
    $n=$nMax/2;
    for ($i=1; $i <= $n; $i++) { 
        $resultat = $i*2;
        $texte.="-$resultat";
    }
    return $texte;
}
echo afficherNombresPairs($argv[1]);