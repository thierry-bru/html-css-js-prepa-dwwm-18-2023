<?php
session_start();
if (isset($_SESSION['isConnected'])&&$_SESSION['isConnected']==true)
{
    echo "est deja connecté via session";
}
else
{
    if (isset($_POST['email'])&&isset($_POST['password'])&&($_POST['email']=="thierry.bru@viaformation.fr")&&($_POST['password']=="1234"))
    {
        echo "connecte";
        $_SESSION['isConnected']=true;
        //isset($_POST['firstName'])?$_SESSION['pseudo']=$_POST['firstName']:$_SESSION['pseudo']="inconnu";
    }
    else
    {
        header('Location:index.php');
    }
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
    <p>
       
    </p>
</body>
</html>