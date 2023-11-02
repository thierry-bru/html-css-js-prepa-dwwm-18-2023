<?php
function afficherPuissancesDeDeux($nombre)
{
    $texte = "";
    // for ($i=0; $i <= $nombre; $i++) { 
    //     $resultat = pow(2,$i);
    //     $texte .= "2^$i = $resultat\n";
    // }
    $i=0;
    while($i<=$nombre)
    {
        $resultat = pow(2,$i);
        $texte .= "2^$i = $resultat\n";
        $i++;
    }
    return $texte;
}
echo afficherPuissancesDeDeux($argv[1]);