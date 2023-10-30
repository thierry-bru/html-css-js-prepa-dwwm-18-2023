<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_GET['name']) || !isset($_GET['firstname'])) {
    ?>
        <form action="demo_formulaire.php" method="get">
            <input type="text" name="name" id="lenom">
            <input type="text" name="firstname" id="leprenom">
            <button>envoyer</button>
        </form>
        <ul>
        <?php
    } else {
        echo "les parametres";
        foreach ($_GET as $key => $value) {
            echo "<li>[$key]=$value</li>";
        }
    }
        ?>
        </ul>
</body>
</html>