<?php
function afficherNombresDecompte($nMax)
{
    $texte ="";
    for ($i=$nMax; $i >=1 ; $i--) { 
       //echo $i;
       $texte.="<$i>";
    }
    return $texte;
}
$n=$argv[1];
echo afficherNombresDecompte($n);