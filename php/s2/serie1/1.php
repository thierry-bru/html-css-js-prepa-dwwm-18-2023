<?php
var_dump($argv);
foreach ($argv as $key => $value) {
    echo "[$key]=$value\n";
}
$nb = count($argv);
echo "le tableau contient $nb elements\n";
echo "le tableau contient $argc elements\n";