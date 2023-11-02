<?php
function afficherNombres($nMax)
{
    for ($i=1; $i <= $nMax; $i++) { 
        echo $i;
    } 
}

$n = $argv[1];
// for ($i=1; $i <= $n; $i++) { 
//     echo $i;
// }
afficherNombres($n);