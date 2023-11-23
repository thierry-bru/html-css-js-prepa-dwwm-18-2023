<?php
$nombre=$_POST['nombreA'];
if ($_POST['nombreB']<$_POST['nombreC'])
    {
        $nombreInf=$_POST['nombreB'];
        $nombreSup =$_POST['nombreC'];
    }
    else
    {
        $nombreInf=$_POST['nombreC'];
        $nombreSup =$_POST['nombreB'];
    }

if (($nombre>$nombreInf)&&($_POST['nombreA']<$nombreSup))
$resultat ="Oui, ".$nombre." est compris entre ".$nombreInf." et ".$nombreSup.".";
else
$resultat ="Non, ".$nombre." n'est pas compris entre ".$nombreInf." et ".$nombreSup.".";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Résultat du test </h1>
<p><?=$nombre?> est-t-il compris entre <?=$nombreInf?> et <?=$nombreSup?></p>
<p><?=$resultat?></p>
</body>
</html>