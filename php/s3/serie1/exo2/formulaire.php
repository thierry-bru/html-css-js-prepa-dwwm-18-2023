<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        <fieldset>
            <legend>etat civil</legend>
            <label for="prenom" class="form-label">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" id="" class="form-control">
        <label for="dateNaissance" class="form-label">Date de naissance</label>
        <input type="date" name="dateNaissance" id="" class="form-control">
        <label for="villeNaissance" class="form-label">Ville de naissance</label>
        <input type="text" name="villeNaissance" id="" placeholder="votre ville de Naissance" class="form-control">
        </fieldset>
        <fieldset>
            <legend>Adresse</legend>
        <label for="numeroRue" class="form-label">Numero</label>
        <input type="text" name="numeroRue" id="" placeholder="numeroRue" class="form-control">
    
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" name="adresse" id="" placeholder="adresse" class="form-control">
      
        <label for="codePostal" class="form-label">Code Postal</label>
        <input type="text" name="codePostal" id="" placeholder="code postal" class="form-control">

        <label for="ville" class="form-label">Ville</label>
        <input type="text" name="ville" id="" placeholder="votre ville" class="form-control">
        </fieldset>
        <button>Envoyer</button>
    </form>
</body>
</html>