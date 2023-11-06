<?php
// tableau simple : 
$tableau[0] = 2023;
$tableau[1] = "DEVWEB-18-S2";
$tableau[] = 11.12; // ajoute une n-eme case à la fin du tableau
// tableau à 2 dimensions : 
$tab[0][0] = 12;
$tab[0][1] = "tv";
$tab[1][0] = 1245.678;
$tab[1][1] = "bye";
// tableau associatif : 
$toto["Nom"] = "le nom de famille de Toto...";
$toto["Age"] = 12;
$toto["Adresse"] = "22 rue des bois fleuri";
//tableau 1
//var_dump($tableau);
foreach ($tableau as $key => $value) {
    # code...
    echo "$key =) $value \n";
}
// tableau 2
//var_dump($tab);
foreach ($tab as $key => $value) {
    # code...
    echo "tab[$key]\n";
    foreach ($value as $cle => $item) {
        # code...
        echo "$cle =) $item \n";
    }
}
// tableau 3
//var_dump($toto);
foreach ($toto as $key => $value) {
    ?>
    <li style="background-color:aquamarine;">
    <?php
    echo "[$key] $value \n ";
    ?>
    </li>
    <?php
}


?>
