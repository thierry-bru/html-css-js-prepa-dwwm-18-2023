<?php
$individu1 = array('nom' => 'Dupont', 
                'prenom' => 'Martin', 
                'age' => 18, 
                'nationalite' => 'français');
$individu2 = array('nom' => 'Dupont', 'prenom' => 'Martin', 'age' => 18, 'nationalite' => 'français');
$individu3 = array('nom' => 'Dupont', 'prenom' => 'Martin', 'age' => 18, 'nationalite' => 'français');
$individus = array($individu1, $individu2, $individu3);
var_dump($individus);
foreach ($individus as $key => $individu) {
    echo "individu [$key]\n";
    // echo $individu;
    foreach ($individu as $key => $info) {
        echo "\t$key: $info\n";
    }
}
