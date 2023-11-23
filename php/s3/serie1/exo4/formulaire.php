<?php
$contenuLignes="";
$styleTableau="";

// récupération des infos du formulaire avec vérification existance
if (isset($_POST['nombreLigne']))
    $nombreLigne=$_POST['nombreLigne'];
else
    $nombreLigne=0;
#region gestion colonnes
    if (isset($_POST['nombrecolonne']))
    $nombrecolonne=$_POST['nombrecolonne'];
else
    $nombrecolonne=0;
#endregion
if (isset($_POST['epaisseurLigne']))
    $epaisseurLigne=$_POST['epaisseurLigne'];
else
    $epaisseurLigne=0;
// stile des cases
$styleTableau=" style='border: ".$epaisseurLigne."px solid black'";
// construction du tableau
    for ($i=0; $i < $nombreLigne; $i++) { 
#region gestion colonnes
        $contenuColonnes="";
        for ($j=0; $j < $nombrecolonne; $j++) { 
            $contenuColonnes.="<TD ".$styleTableau." >&nbsp</TD>";
        }
#endregion
        $contenuLignes.="<TR>".$contenuColonnes."</TR>";
    }    
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="nombreLigne" id="" value="<?=$nombreLigne?>">
        <label for="nombreLigne">Nombre de ligne</label>
        <input type="number" name="nombrecolonne" id="" value="<?=$nombrecolonne?>">
        <label for="nombrecolonne">Nombre de ligne</label>

        <input type="range" name="epaisseurLigne" id="" min="0" max="10" step=1 value="<?=$epaisseurLigne?>">
        <label for="epaisseurLigne">Epaisseur</label>
        <button>Envoyer</button>
    </form>
    <table <?=$styleTableau?>>
    <?=$contenuLignes?>
    </table>
</body>
</html>