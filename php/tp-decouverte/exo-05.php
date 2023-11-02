<?php
$duree = 6700;
$h = intdiv($duree,3600);
$m= intdiv(($duree%3600),60);
$reste = ($duree%3600);
$s =$reste%60;
echo "$duree secondes = $h h $m m $s s";