<?php
for ($i=0; $i <= 16; $i++) { 
    $resultat = 2**$i;// pow(2,$i)
    echo " 2^$i =  $resultat \n";
}
$i=0;
while ($i<=16)// pas de ; !
{
    $resultat = 2**$i;// pow(2,$i)
    echo " 2^$i =  $resultat \n";
    $i++;
}
$i=0;
do
{
    $resultat = 2**$i;// pow(2,$i)
    echo " 2^$i =  $resultat \n";
    $i++;
}
while ($i<=16); // attention il faut un ;