<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "bonjour,".htmlentities($_GET['name']);
   // var_dump($_GET);
    ?>
</body>
</html>