<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST) && count($_POST)>0)
    {
        ?>
    Bonjour, <?=$_POST['prenom']?> <?=$_POST['nom']?>, vous êtes né(e) à <?=$_POST['villeNaissance']?> le <?=$_POST['dateNaissance']?>
    <?php
    }
    else
    {
    ?>
  <form  method="post">
  <label for="prenom">prenom</label>
    <input type="text" name="prenom" id="">
    <label for="nom">nom</label>
    <input type="text" name="nom" id="">

    <label for="dateNaissance"></label>
    <input type="date" name="dateNaissance" id="">
    <label for="villeNaissance"></label>
    <input type="text" name="villeNaissance" id="">
    <input type="reset" value="Reset" />
    <button>Envoyer</button>
  </form>
  <?php
    }?>
</body>
</html>