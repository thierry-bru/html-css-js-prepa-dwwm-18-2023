<?php
$tableauNombre=[0,1,2,3,4,5,6];
$somme = 0;
//$somme = array_sum($tableauNombre);
// for ($i=0; $i < count($tableauNombre) ; $i++) {// solution ok boomer
//     $somme+=$tableauNombre[$i];
// }
foreach ($tableauNombre as $key => $value) {
    $somme+=$value;
}
$moyenne = $somme/count($tableauNombre);
// calcul ecart type
$sommeEcarts = 0;
foreach ($tableauNombre as $key => $value) {
    $sommeEcarts+=abs($value-$moyenne);
}
$ecartType = $sommeEcarts/count($tableauNombre);
echo "total=$somme moyenne=$moyenne ecart-type=$ecartType";