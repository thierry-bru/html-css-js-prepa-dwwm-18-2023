<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $tab=[1,5,10,12,'toto'];
 //la facon 2023
 $tableau = new ArrayObject();
 for ($i=1; $i <=10 ; $i++) { 
    $tableau->append($i);
 }
 foreach ($tableau as $key => $value) {
    echo "$key->$value";
 }
 ?>
</body>
</html>