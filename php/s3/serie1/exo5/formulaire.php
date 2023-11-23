<?php
session_start();
//var_dump($_SESSION);
// var_dump($_POST);
// echo "nomUtilisateur:". ((isset($_POST['nomUtilisateur'])==1)?"1":"0");
// echo "motDePasse:". ((isset($_POST['motDePasse'])==1)?"1":"0");
///
if (isset($_SESSION['estConnected']) && ($_SESSION['estConnected'] == true))
    $estConnected = true;
else {
    #region check connexion
    if (isset($_POST['nomUtilisateur']))
        $nomUtilisateur = $_POST['nomUtilisateur'];
    else
        $nomUtilisateur = "";

    if (isset($_POST['motDePasse']))
        $motDePasse = $_POST['motDePasse'];
    else
        $motDePasse = "";
    if (($nomUtilisateur == "thierry.bru@viaformation.fr")
        && (strtolower(trim($motDePasse)) == "abc")
    )
    // on enleve les espaces a droite et a gauche et on met tout en minuscule
    {
        $estConnected = true;
        $_SESSION['estConnected'] = true;
    } else
        $estConnected = false;
        #endregion
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
    <?php
    if (!$estConnected) { ?>
        <form action="" method="post">
            <label for="nomUtilisateur"> Nom d'utilisateur</label>
            <input type="email" name="nomUtilisateur" id="" required>
            <label for="motDePasse"> Mot de passe</label>
            <input type="password" name="motDePasse" id="" required>
            <button>Connexion</button>
        </form>
    <?php } else
        echo "welcome";
    ?>
</body>

</html>