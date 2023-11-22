<?php
include_once 'header.php';
// array(7) { ["salutation"]=> string(3) "mme" ["prenom"]=> string(10) "Géraldine" ["nom"]=> string(3) "BRU" ["dateNaissance"]=> string(10) "2023-11-23" ["identifiant"]=> string(2) "tb" ["motdepasse"]=> string(1) "e" ["genre"]=> string(1) "F" }
if ((isset($_POST['salutation']) 
&& (isset($_POST['prenom']))
&& (isset($_POST['nom']))
&&(strlen($_POST['salutation']>0))
&&(strlen($_POST['prenom']>0))
&&(strlen($_POST['nom']>0)))
)
{
?>
    <p>Bonjour, 
    <?php 
    if ($_POST['genre']=='F')  
    echo "gente dame:"  ;
else
    echo "gent damoiseau";?>
    
    <?=$_POST['salutation']?> <?=$_POST['prenom']?> <?=htmlentities($_POST['nom'])?> </p>

<?php
}
else
{
    echo "tout est vide boo";
    var_dump($_POST);
}

include_once 'footer.php';
?>