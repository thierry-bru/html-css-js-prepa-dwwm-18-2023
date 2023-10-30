<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $nombre = 1;
        do {
            echo "<li>$nombre</li>";
            $nombre++;
        } while ($nombre <= 10);

        $nombre = 1;
        while ($nombre <= 10) {
            echo "<li>$nombre</li>";
            $nombre++;
        }
        ?>
    </ul>
</body>

</html>