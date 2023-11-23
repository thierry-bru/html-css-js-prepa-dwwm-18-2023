<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($_POST);?>
    <!-- array(8) { ["prenom"]=> string(7) "Thierry" ["nom"]=> string(3) "BRU" ["dateNaissance"]=> string(0) "" ["villeNaissance"]=> string(6) "Cahors" ["numeroRue"]=> string(6) "28 bis" ["adresse"]=> string(29) "Rue de la société francaise" ["codePostal"]=> string(5) "36000" ["ville"]=> string(7) "Vierzon" } -->
    <a href="etat-civil.php?prenom=<?=$_POST['prenom']?>&nom=<?=$_POST['nom']?>&dateNaissance=<?=$_POST['dateNaissance']?>&villeNaissance=<?=$_POST['villeNaissance']?>">Etat civil</a> | 
    <a href="adresse.php?numeroRue=<?=$_POST['numeroRue']?>&adresse=<?=$_POST['adresse']?>&codePostal=<?=$_POST['codePostal']?>&ville=<?=$_POST['ville']?>">adresse</a>
</body>
</html>