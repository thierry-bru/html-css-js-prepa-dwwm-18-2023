<?php
$films=['The Sharwshank','The Godfather','The Dark Knight','The Lord of the Ring','Pulp Fiction'];
foreach ($films as $key=>$film) {
    $cle= $key+1;
    echo "$cle) - $film\n";
}
?>