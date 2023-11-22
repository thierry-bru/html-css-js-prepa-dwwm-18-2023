<?php
include_once 'header.php';
?>
    <div class="container-fluid">
    <form action="reponse.php" method="POST">
        <select name="salutation" id="">
            <option value="mme">Mme</option>
            <option value="mr"></option>
        </select>
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">

        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" id="" class="form-control">

        <label for="dateNaissance" class="form-label">Date de naissance</label>
        <input type="date" name="dateNaissance" id="" class="form-control">
        <input type="text" name="identifiant" id="" placeholder="votre identifiant" class="form-control">

        <label for="motdepasse" class="form-label">Mot de Passe</label>
        <input type="password" name="motdepasse" id="" class="form-control">
        genre
        <fieldset>
            <legend>Genre</legend>
            <input type="radio" name="genre" id="" value="H" >homme
            <input type="radio" name="genre" id="" value="F">femme
            <input type="radio" name="genre" id="" value="O">autre
        </fieldset>
        
        <input type="checkbox" name="debutant" id="">je débute en php
        <button class="btn bg-primary" >envoyer!</button>
    </form>
</div>
<?php
include_once 'footer.php'
?>